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
    <link rel = "stylesheet" href='style_product.css'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
  </head>
  <style>
.button{
  display: inline-block;
  background: #d16500;
  color: #fff;
  padding: 8px 30px;
  margin: 30px 0;
  border-radius: 20px; 
  border-radius: 20px;
  transition: background 0.3s;
}
.button:hover{
  background: #3234ad;
}
.button-container form,
.button-container form div {
    display: inline;
}

.button-container button {
    display: inline;
    vertical-align: middle;
}
  </style>

  <body>
    <header>
      <div class = "header">
        <div class="container">
          <div class = "navbar">
            <div class="logo">
              <img src = "img/logo.png" alt = "logo" style="width:120px;height:100px;">
            </div>
            <div style="padding-left:16px">
              <!-- <i><font style="font-family:monotype corsiva">Welcome to</font></i> -->
              <h2>UIUC MarketPlace</h2>
            </div>
              <nav>
                <ul>
                  <li><a href = "testphp.php">Home</a></li>
                  <li><a href = "testphp.php">Log In</a></li>
                  <li><a href = "web.html">About Marketplace</a></li>
                  <li><a href = "my_profile.php">My Account</a></li>
                  <li><a href = "#">Contact</a></li>
                </ul>
              </nav>
          </div>
        </div>
        <!-- <a class = "header-logo" href = "testphp.php">
          <img src = "img/logo.png" alt = "logo" style="width:100px;height:80px;">
        </a>
        <ul>
          <li><a href = "testphp.php">Home</a></li>
          <li><a href = "testphp.php">Log In</a></li>
          <li><a href = "web.html">About Marketplace</a></li>
          <li><a href = "my_profile.php">My Account</a></li>
          <li><a href = "#">Contact</a></li>
        </ul> -->

        <div class="button-container">
          <form action="includes/login.inc.php" method="post">
            <input type='text' name="mailuid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="login-submit" class="button">Login</button>
          </form>
          <form action="signup.php" method="post">
            <button type="submit" name="signup" class="button"> Signup </button>
          </form>

          <!-- <a href="signup.php">Signup</a> -->
          <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit" class="button">LogOut</button>
          </form>
        </div>
    </header>
  </body>
</html>