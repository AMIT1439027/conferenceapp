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
    <title>user</title>
</head>
<body>
    
</body>
</html>
