<!DOCTYPE html>
<html>
<head>
    <title>Reservation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Make a Reservation</h1>

    <form action="insert.php" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Message"></textarea>
        <input type="date" name="date">
        <button type="submit">Reserve</button>
    </form>
</div>

</body>
</html>