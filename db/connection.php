<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aplikasi_leopardgecko";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}
