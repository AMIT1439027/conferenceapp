<?php
include 'db_connect.php';
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $food = $conn->query("SELECT * FROM foods WHERE id=$id")->fetch_assoc();
}
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
    
</body>
</html>