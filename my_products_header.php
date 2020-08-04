<?php
  session_start();
  $User_ID = $_SESSION['User_ID'];
  $User_Name = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<style>
  /* Dropdown Button */
.dropbtn {
  background-color: #d16500;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}


/* The container <div> - needed to position the dropdown content */
.dropdown {
  float: right;
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3234ad;}

</style>

<head>
  <meta charset="UTF-8">
  <title>UIUC Markeplace</title>
  <link rel = "stylesheet" href='style_product.css'>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="dropdown">
    <button class="dropbtn"><?php print "Hi $User_Name";  ?></button>
    <div class="dropdown-content">
      <a href="search/search.php">Home</a>
      <a href="my_profile.php">My Account</a>
      <a href="includes/logout.inc.php">Log out</a>
    </div>
  </div>


<div class="header">
  <div class="container">
    <div class="navbar">
      <div class="logo">
        <img src="ProductImage/product1.png" alt="" style="width:300px">
      </div>
        <nav>
        <ul>
          <li> <a href="search.php"> Search</h4></a></li>
          <li> <a href="my_products.php"> My Products</h4></a></li>
          <li> <a href="my_purchases.php">My Purchases</a></li>
          <li> <a href="my_favorites.php">My Favorites</a></li>
          <li> <a href="my_reviews.php">My Reviews</a></li>
          <li> <a href="my_profile.php">My Profile</a></li>
        </ul>
      </nav>
      <img src="ProductImage/product1.png" alt="" style="width:30px">
  </div>
</div>


</body>
</html>
