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
        <a href="register.php">Register A Conference</a>
        <a href="feedback.php">Feedback</a>
        
    </nav>
</header>

<main>
    <div class="form-container">
        <h2>Register</h2>
        <form method="post" action="user_register.php">
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
            
        </form>
        <!-- <p>Already have an account? <a href="login.php">Login here</a></p> -->
    </div>
    </main>
    <footer>
    <p>&copy; 2024 Conference Management</p>
 </footer>
</body>
</html>


body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

header {
    background-color: #4CAF50;
    color: white;
    padding: 1em 0;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header h1 {
    margin: 0;
}

nav a {
    color: white;
    text-decoration: none;
    padding: 0 1em;
    transition: color 0.3s;
}

nav a:hover {
    color: #e0e0e0;
}

main {
    padding: 2em;
    max-width: 800px;
    margin: 0 auto;
    background: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #4CAF50;
}

ul {
    list-style: none;
    padding: 0;
}

ul li {
    margin-bottom: 1.5em;
    padding: 1em;
    background: #f9f9f9;
}
 <?php
include 'db_connect.php';
 
$stmt = $pdo->query("SELECT * FROM conferences");
$conferences = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Conference Management System</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="schedule.php">Schedule</a>
        <a href="register.php">Register A Conference</a>
        <a href="feedback.php">Feedback</a>
        <!-- <a href="admin.php">Admin</a> -->
    </nav>
</header>
<main>
    <div class="form-container">
        <h2>Schedule</h2>
        <ul>
            <?php foreach($conferences as $conference): ?>
                <li>
                    <h3><?= htmlspecialchars($conference['name']) ?></h3>
                    <p><?= htmlspecialchars($conference['description']) ?></p>
                    <p><?= htmlspecialchars($conference['date']) ?></p>
                    <p>Location: <?= htmlspecialchars($conference['location']) ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>

<footer>
    <p>&copy; 2024 Conference Management</p>
</footer>
    
</body>
</html>