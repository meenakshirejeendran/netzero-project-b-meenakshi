<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "rose_and_crown";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>