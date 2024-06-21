<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM conferences WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: admin.php");
}
?>