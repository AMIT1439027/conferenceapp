<?php
include 'db_connect.php';

// Handle new conference addition
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_conference'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $location = $_POST['location'];

    $stmt = $pdo->prepare("INSERT INTO conferences (name, description, date, location) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $description, $date, $location]);

    echo "Conference added successfully!";
}

// Handle conference updates
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_conference'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $location = $_POST['location'];

    $stmt = $pdo->prepare("UPDATE conferences SET name = ?, description = ?, date = ?, location = ? WHERE id = ?");
    $stmt->execute([$name, $description, $date, $location, $id]);

    echo "Conference updated successfully!";
}

// Fetch all conferences
$stmt = $pdo->query("SELECT * FROM conferences");
$conferences = $stmt->fetchAll();

// Fetch all registrations
$stmt_registrations = $pdo->query("
    SELECT r.id, u.username, c.name AS conference_name, r.feedback 
    FROM registrations r
    JOIN users u ON r.user_id = u.id
    JOIN conferences c ON r.conference_id = c.id
");
$registrations = $stmt_registrations->fetchAll();
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
        <!-- <nav>
            <a href="index.html">Home</a>
            <a href="schedule.html">Schedule</a>
            <a href="register.html">Register</a>
            <a href="feedback.html">Feedback</a>
            <a href="admin.php">Admin</a>
        </nav> -->
    </header>
    <main>
        <h2>Admin Panel</h2>
        
        <!-- Add Conference Form -->
        <h3>Add Conference</h3>
        <form action="admin.php" method="POST">
            <input type="hidden" name="add_conference" value="1">
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

        <!-- List of Conferences -->
        <h3>Manage Conferences</h3>
        <ul>
            <?php foreach ($conferences as $conference): ?>
               
                    <form action="admin.php" method="POST" style="display:b;">
                        <input type="hidden" name="update_conference" value="1">
                        <input type="hidden" name="id" value="<?= $conference['id'] ?>">
                        <input type="text" name="name" value="<?= htmlspecialchars($conference['name']) ?>" required>
                        <input type="text" name="description" value="<?= htmlspecialchars($conference['description']) ?>" required>
                        <input type="date" name="date" value="<?= htmlspecialchars($conference['date']) ?>" required>
                        <input type="text" name="location" value="<?= htmlspecialchars($conference['location']) ?>" required>
                        <input type="submit" value="Update">
                    </form>
                    <form action="delete_conference.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $conference['id'] ?>">
                        <input type="submit" value="Delete">
                    </form>
                
            <?php endforeach; ?>
        </ul>

        <!-- List of Registrations -->
        <h3>Registrations</h3>
        <ul>
            <?php foreach ($registrations as $registration): ?>
                <li>
                    User: <?= htmlspecialchars($registration['username']) ?> |
                    Conference: <?= htmlspecialchars($registration['conference_name']) ?> |
                    Feedback: <?= htmlspecialchars($registration['feedback']) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
    <footer>
        <p>&copy; 2024 Conference Management</p>
    </footer>
</body>
</html>