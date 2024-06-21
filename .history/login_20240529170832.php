<?php
include 'db_connect.php';
 
$stmt = $pdo->query("SELECT * FROM users ");
$conferences = $stmt->fetchAll();
?>

