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
    <title>schedule</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Conference Management System</h1>

    <nav>
    <a href="index.php">Home</a>
        <a href="Schedule.php">Schedule </a>
        <a href="register.php">Register</a>
        <a href="feedback.php">Feedback</a>
        <a href="admin.php">Admin</a>
        
    </nav>
</header>
<main>
<div class="form-container">
    <h2>Schedule</h2>
    <ul>
        <?php
        foreach($conferences as $conference): ?>
             
             
              <h3><?=htmlspecialchars($conference['name'])?></h3>
              <p><?=htmlspecialchars($conference['description'])?></p>
              <p><?=htmlspecialchars($conference['date'])?></p>
              <p>location: <?= htmlspecialchars($conference['location']) ?></p>
          
            <?php endforeach; ?>
       
    </ul>
    </div>
</main>

<footer>
    <p>&copy; 2024 Conference Management</p>
 </footer>
    
</body>
</html>