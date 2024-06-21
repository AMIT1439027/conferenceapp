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
    <link rel="stylesheet" href="styles.css">
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
     <main>
        
        <form method="post">
             <label for="username">UserName: </label>
             <input type="text" name="username" id="username" required><br>
         
             <label for="password">Password: </label>
             <input type="password" name="password" id="username" required>
             <br>

             <input type="submit" value="submit">
        </form>
     </main>
 
<br>
<br>
<br>

<footer>
    <p>&copy; 2024 Conference Management</p>
 </footer>
    
</body>
</html>
