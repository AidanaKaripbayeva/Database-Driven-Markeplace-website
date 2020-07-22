<?php


$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'MarketPlaceJava';

$conn = @mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}

?>
