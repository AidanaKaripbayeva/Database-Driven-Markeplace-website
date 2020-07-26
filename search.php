<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar label {
  color: white;
  padding: 8px;
  margin: auto;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.navbar .search-container {
  float: right;
  width: 80%;
}

.navbar input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  width: 80%;
  border: none;
}

.navbar .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.navbar .search-container button:hover {
  background: #ccc;
}
.navbar input[type=number] {
  padding: 6px;
  margin: 8px;
  margin-left: 205px;
  font-size: 17px;
  border: none;
  width: 10%;
}

.btn-group button {
  background-color: #ccc; /* Green background */
  border: 1px solid black; /* Green border */
  color: black; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  width: 40%; /* Set a width if needed */
  display: block; /* Make the buttons appear below each other */
}

.btn-group button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

.btn:hover {
  background-color: RoyalBlue;
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}
@media screen and (max-width: 600px) {
  .navbar .search-container {
    float: none;
  }
  .navbar a, .navbar input[type=text], .navbar .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .navbar input[type=text] {
    border: 1px solid #ccc;
  }

</style>
</head>
<body>

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Category
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="electronics.php">Electronics</a>
      <a href="beauty.php">Beauty</a>
      <a href="books.php">Books</a>
      <a href="furniture.php">Furniture</a>
      <a href="fashion.php">Fashion</a>
      <a href="household.php">Household</a>
    </div>
  </div>
    <div class="search-container">
    <form action="search.php" method="POST">
      <input type="text" placeholder="Search.."  id="query" name="query">
      <button type="submit"><i class="fa fa-search"></i></button>
      <input type="number" placeholder="Max Price" id="maxprice" name="maxprice">
      <input type="number" placeholder="Min Price" id="minprice" name="minprice">
    </form>
  </div>
	<p></p>


</div>

<p></p>
<form action="top_seller.php" method="GET">
  <button class="btn"> Top Seller </button>
</form>
<p></p>

<form action="generous_seller.php" method="GET">
  <button class="btn"> Generous Seller </button>
</form>
<p></p>

<button class="btn"><i class="fa fa-home"></i> My Account</button>



</body>
</html>

<?php
    require_once('mysqli_connect.php');

    $query = $_POST['query'] ?? 0;
    // gets value sent over search form

    $min_price = (int) -1;
    if(!empty($_POST['minprice'])) {
      $min_price = (int) $_POST['minprice'];
    }

    $max_price = (int) 100000000;
    if(!empty($_POST['maxprice'])) {
      $max_price = (int) $_POST['maxprice'];
    }

    // $min_price = isset($_POST['minprice']) ?  $_POST['minprice']: -1;
    // $max_price = isset($_POST['maxprice']) ?  $_POST['maxprice']: 100000000;

    // $min_price = $_POST['minprice'];
    // $max_price = $_POST['maxprice'];

    $min_length = 3;

    // you can set minimum length of the query if you want

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then

        $query = htmlspecialchars($query);
        // $min_price = htmlspecialchars($min_price);
        // $max_price = htmlspecialchars($max_price);
        // changes characters used in html to their equivalents, for example: < to &gt;

        $query = mysqli_real_escape_string($dbc, $query);
        // $min_price = mysqli_real_escape_string($dbc, $min_price);
        // $max_price = mysqli_real_escape_string($dbc, $max_price);
        // makes sure nobody uses SQL injection



        $raw_results = mysqli_query($dbc, "SELECT * FROM Product
            WHERE ((`Product_Name` LIKE '%".$query."%') OR (`Product_Description` LIKE '%".$query."%')) AND (Price_Sell >= $min_price) AND (Price_Sell <= $max_price) ORDER BY Price_Sell DESC") or die(mysqli_error($dbc));


        // if($min_price != -1 and $max_price != 100000000) {
        //   print "case1";
        //   $raw_results = mysqli_query($dbc, "SELECT * FROM product
        //       WHERE (`Product_Name` LIKE '%".$query."%') OR (`Product_Description` LIKE '%".$query."%') AND Price_Sell > $min_price AND Price_Sell < $max_price ") or die(mysqli_error());
        //  }
        //
        // elseif($min_price != -1 && $max_price == 100000000) {
        //   print "case2";
        //   $raw_results = mysqli_query($dbc, "SELECT * FROM product
        //       WHERE (`Product_Name` LIKE '%".$query."%') OR (`Product_Description` LIKE '%".$query."%') AND Price_Sell > $min_price ") or die(mysqli_error());
        // }
        //
        // elseif($min_price == -1 && $max_price != 100000000) {
        //   print "case3";
        //   $raw_results = mysqli_query($dbc, "SELECT * FROM product
        //       WHERE (`Product_Name` LIKE '%".$query."%') OR (`Product_Description` LIKE '%".$query."%') AND Price_Sell < $max_price ") or die(mysqli_error());
        // }
        //
        // else {
        //   print "case4";
        //   $raw_results = mysqli_query($dbc, "SELECT * FROM product
        //       WHERE (`Product_Name` LIKE '%".$query."%') OR (`Product_Description` LIKE '%".$query."%') ") or die(mysqli_error());
        // }


        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table

        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'

        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following

            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

                echo "<p><h3>".$results['Product_Name']."</h3>".$results['Product_Description']."<h3>".$results['Price_Sell']."</h3></p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }

        }
        else{ // if there is no matching rows do following
            echo "No results";
        }

    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>
