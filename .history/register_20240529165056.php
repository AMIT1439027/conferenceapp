<?php
include 'db_connect.php';
 name =document.getElementById("name");
if (name==""){
    alert("Enter")
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $location = $_POST['location'];

    $stmt = $pdo->prepare("INSERT INTO conferences (name, description, date, location) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $description, $date, $location]);

    echo "Conference added successfully!";
}

$stmt = $pdo->query("SELECT * FROM conferences");
$conferences = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register a Conference</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Conference Management</h1>
        <nav>
        <a href="index.php">Home</a>
        <a href="Schedule.php">Schedule </a>
        <a href="register.php">Register A Conference</a>
        <a href="feedback.php">Feedback</a>
        <!-- <a href="user_register.php"></a> -->
        </nav>
    </header>
    <main>

    <div class="form-container">
        
        <h3>Register A Conference</h3>
        
        <form action="register.php" method="POST">
            <label for="name">Conference Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
            <br>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
            <br>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
            <br>
            <input type="submit" value="Add Conference">
        </form>
        
    </div>
    </main>
    <footer>
        <p>&copy; 2024 Conference Management</p>
    </footer>
</body>
</html>