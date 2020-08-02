<?php
if (isset($_POST['signup-submit'])) {

	require 'dbh.inc.php';

	$username = $_POST['uid'];
	$email = $_POST['mail'];
	$phone = $_POST['phone'];
	// $address = $_POST['address']
	$zip = $_POST['zip'];
	$password = $_POST['pwd'];
	$passwordrepeat = $_POST['pwd'];

	// check for empty fields 

	if (empty($username) || empty($email) || empty($password) || empty($passwordrepeat)) {
		header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();
	}

	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invalidmailuid");
		exit();
	}

	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../signup.php?error=invalidEmail&uid=".$username);
		exit();
	}

	else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invalidUsername&mail=".$email);
		exit();
	}

	else if ($password !== $passwordrepeat) {
		header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
	}

	else {

		$sql = "SELECT User_Name FROM Customer WHERE User_Name=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("Location: ../signup.php?error=usertaken&mail=".$email);
				exit();
			}
			else{

				$sql = "INSERT INTO Customer (User_Name, Email, Phone, Zipcode, User_Password) VALUES(?, ?, ?, ?, ?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: ../signup.php?error=sqlerror");
					exit();
			}
			else{

				$hashedPwd = password_hash($password, PASSWORD_DEFAULT);


				mysqli_stmt_bind_param($stmt, "sssss", $username, $email, $phone, $zip, $hashedPwd);
				mysqli_stmt_execute($stmt);
				header("Location: ../signup.php?signup=success");
				exit();
			}
		}

	}



  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);


}
else{
	header("Location: ../signup.php");
	exit();
}
