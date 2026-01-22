<?php
$servername = "127.0.0.1";
$port       = 3308;             // set your port here
$username   = "root";
$password   = "";
$dbname     = "restaurant";

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>