<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}

include "db_connect.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container dashboard-container">
    <h1>Welcome Admin</h1>

    <a href="index.php" class="btn">Add Reservation</a>
    <a href="logout.php" class="btn logout">Logout</a>

    <h2>Reservations</h2>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM reservations");

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['message']}</td>
                    <td>{$row['date']}</td>
                  </tr>";
        }
        ?>
    </table>
</div>

</body>
</html>