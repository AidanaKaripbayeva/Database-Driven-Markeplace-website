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
      <nav class = "nav-header-main">
        <a class = "header-logo" href = "testphp.php">
          <img src = "img/logo.png" alt = "logo" style="width:100px;height:80px;">
        </a>
        <ul>
          <li><a href = "testphp.php">Home</a></li>
          <li><a href = "testphp.php">Log In</a></li>
          <li><a href = "web.html">About Marketplace</a></li>
          <li><a href = "#">My Account</a></li>
          <li><a href = "#">Contact</a></li>
        </ul>

        <div> 
          <form action="includes/login.inc.php" method="post">
            <input type='text' name="mailuid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <form action="signup.php" method="post">
            <button type="submit" name="signup"> Signup </button>
          </form>';

          <!-- <a href="signup.php">Signup</a> -->
          <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">LogOut</button>
          </form>
        </div>

<!--         <div>

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
                      <button type="submit" name="signup"> Signup </button>
                </form>';
            }

          ?>
        </div>  -->


      </nav>
    </header>
  </body>
</html>
