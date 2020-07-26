<?php

  if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php';
    $usernameOrEmail = $_POST['usernameOrEmail'];
    $password = $_POST['pwd'];

    if (empty($usernameOrEmail) || empty($password)) {
      header("Location: ../index.php?error=emptyfields");
      exit();
    } else {
      $sql = "select * from Customer where User_Name=? or Email=?;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=sqlerror");
        exit();
      } else {
        mysqli_stmt_bind_param($stmt, "ss", $usernameOrEmail, $usernameOrEmail);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
          // $pwdCheck = password_verify($password, $row['Password']);
          $pwdCheck = $password == $row['Password'];
          if ($pwdCheck == true){
            session_start();
            $_SESSION["User_Name"] = $row['User_Name'];
            $_SESSION["User_ID"] = $row['User_ID'];
            header("Location: ../index.php?login=sucess");
            exit();
          } else {
            header("Location: ../index.php?error=wrongpassword");
            exit();
          }
        } else {
          header("Location: ../index.php?error=nouser");
          exit();
        }
      }
    }
  } else {
    header("Location: ../index.php");
    exit();
  }
