<?php
include 'db_connect.php';
 
$stmt = $pdo->query("SELECT * FROM users ");
$conferences = $stmt->fetchAll();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>
<header>
    <h1>Conference Management System</h1>

    <nav>
    <a href="index.php">Home</a>
        <a href="Schedule.php">Schedule </a>
        <a href="register.php">Register A Conference</a>
        <a href="feedback.php">Feedback</a>
        <!-- <a href="admin.php">Admin</a> -->
        
    </nav>
</header>
</body>
</html>
