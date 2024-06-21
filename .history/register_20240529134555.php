<?php
include 'db_connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

   $stmt = $pdo->prepare("INSERT INTO users(username,email,password) VALUES(?,?,?)");
   $stmt->execute([$username,$email,$password]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h1>Conference Management System</h1>

    <nav>
        <a href="index.php">Home</a>
        <a href="Schedule.php">Schedule </a>
        <a href="register.php">Register</a>
        <a href="feedback.php">Login</a>
        <a href="admin.php">Admin</a>
        
    </nav>
</header>

<main>
    <div class="form-container">
        <h2>Register</h2>
        <form method="post" action="register.php">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Register</button>
            Lo
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
    </main>
    <footer>
    <p>&copy; 2024 Conference Management</p>
 </footer>
</body>
</html>
