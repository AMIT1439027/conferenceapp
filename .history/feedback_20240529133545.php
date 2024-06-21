<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $conference_id = $_POST['conference_id'];
    $feedback = $_POST['feedback'];

    $stmt = $pdo->prepare("INSERT INTO registrations (user_id, conference_id, feedback) VALUES (?, ?, ?)");
    $stmt->execute([$user_id, $conference_id, $feedback]);

    echo "Feedback submitted!";
}

$stmt_users = $pdo->query("SELECT * FROM users");
$users = $stmt_users->fetchAll();

$stmt_conferences = $pdo->query("SELECT * FROM conferences");
$conferences = $stmt_conferences->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Conference Management</h1>
        <nav>
        <a href="index.php">Home</a>
        <a href="Schedule.php">Schedule </a>
        <a href="register.php">Register</a>
        <a href="feedback.php">Feedback</a>
        <a href="login.php">Login</a>
        <a href="admin.php">Admin</a>
    </nav>
    </header>
    <main>
        <h2>Submit Feedback</h2>
        <form action="feedback.php" method="POST">
            <label for="user_id">User:</label>
            <select id="user_id" name="user_id" required>
                <?php foreach ($users as $user): ?>
                    <option value="<?= htmlspecialchars($user['id']) ?>"><?= htmlspecialchars($user['username']) ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <label for="conference_id">Conference:</label>
            <select id="conference_id" name="conference_id" required>
                <?php foreach ($conferences as $conference): ?>
                    <option value="<?= htmlspecialchars($conference['id']) ?>"><?= htmlspecialchars($conference['name']) ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" required></textarea>
            <br>
            <input type="submit" value="Submit">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Conference Management</p>
    </footer>
</body>
</html>