<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <style type = "text/css">
  table, th, td {border: 1px solid black};
   </style>
</head>
<body>

<<?php

require_once('mysqli_connect.php');

$top_seller = mysqli_query($dbc, "SELECT C.User_Name, P.Product_Name, MIN(P.Price_Sell) as Price, P.Category FROM product P JOIN customer C ON P.Seller_ID = C.User_ID GROUP BY `Category` ") or die(mysqli_error());

echo "<table border='1'>
<tr>
<th>User Name</th>
<th>Product Name</th>
<th>Category</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($top_seller))
{
echo "<tr>";
echo "<td>" . $row['User_Name'] . "</td>";
echo "<td>" . $row['Product_Name'] . "</td>";
echo "<td>" . $row['Category'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
echo "</tr>";
}
echo "</table>";


 ?>
</body>
</html>
