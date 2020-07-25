<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '1312Vard#@^');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'project_db_trial');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>