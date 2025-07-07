<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "root";
$dbName = "classic_hoteldb";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
   die("something went wrong!");
}
