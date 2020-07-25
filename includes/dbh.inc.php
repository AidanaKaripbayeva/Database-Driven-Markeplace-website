<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "1312Vard#@^";
$dBName = "database_setup";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}