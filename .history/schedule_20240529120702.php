<?php
include 'db_connect.php';
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $food = $conn->query("SELECT * FROM foods WHERE id=$id")->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>schedule</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Conference Management System</h1>

    <nav>
        <a href="index.html">Home</a>
        <a href="Schedule.html">Schedule Meeting</a>
        <a href="register.php">Register</a>
        <a href="feedback.html">Login</a>
        <a href="admin.html">Admin</a>
    </nav>
</header>
<main>
    <h2>Shc</h2>
</main>

<footer>
    <p>&copy; 2024 Conference Management</p>
 </footer>
    
</body>
</html>