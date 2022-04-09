<?php

session_start();
//constants to avoid repeating values
define('SITEURL','http://localhost/project1/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','food-order');
$conn = mysqli_connect('localhost','root','') or die(mysqli_error());
$db_select = mysqli_select_db($conn,'food-order') or die(mysqli_error());
?>