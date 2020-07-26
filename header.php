<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
    <meta name = "description" content = "This is an website for students in UIUC">
    <meta name = viewport content = "width=device-width, initial-scale=1">
    <title> Marketpalce UIUC </title>
    <link rel = "stylesheet" href = "style.css">
  </head>
  <body>
    <header>
      <nav>
        <!-- <a href = "#">
          <img src = "images/logo.png" alt = "logo">
        </a> -->
        <ul>
          <li><a href = "index.php">Home</a></li>
          <li><a href = "#">Profile</a></li>
          <li><a href = "#">About Marketplace</a></li>
          <li><a href = "#">Contact</a></li>
        </ul>

        <div>

          <?php
            if (isset($_SESSION['User_ID'])) {
              echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit"> Logout </buttom>
                    </form>';
            } else {
              echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="usernameOrEmail" placeholder="Username/Email">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit"> Login </buttom>
                </form>
                <form action="signup.php" method="post">
                      <button type="submit" name="signup"> Signup </buttom>
                </form>';
            }

          ?>


      </nav>
    </header>
  </body>
</html>
