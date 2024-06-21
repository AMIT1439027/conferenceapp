<?php
include 'db_connect.php';

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
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Conference Management</h1>
        <nav>
        <a href="index.php">Home</a>
        <a href="Schedule.php">Schedule </a>
        <a href="register.php">Register A Conference</a>
        <a href="admin.php">Admin</a>
        >
        </nav>
    </header>
    <main>

    <div class="form-container">
        
        <h3>Register A Conference</h3>
        
        <form action="admin.php" method="POST">
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
        <!-- <h3>Manage Conferences</h3>
        <ul>
            <?php foreach ($conferences as $conference): ?>
                <li>
                    <?= htmlspecialchars($conference['name']) ?> - <?= htmlspecialchars($conference['date']) ?> - <?= htmlspecialchars($conference['location']) ?>
                    <form action="delete_conference.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $conference['id'] ?>">
                        <input type="submit" value="Delete">
                    </form>
                </li>
            <?php endforeach; ?>
        </ul> -->
    </div>
    </main>
    <footer>
        <p>&copy; 2024 Conference Management</p>
    </footer>
</body>
</html>