<?php
include "db_connect.php";

$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);
?>

<h2>Reservations List</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Date</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['date']}</td>
    </tr>";
}
?>
</table>