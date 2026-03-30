<?php
include "db_connect.php";

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$date = $_POST["date"];

$sql = "INSERT INTO reservations (name, email, message, date)
VALUES ('$name', '$email', '$message', '$date')";

if (mysqli_query($conn, $sql)) {
    echo "Reservation successful <br><a href='dashboard.php'>Go to Dashboard</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>