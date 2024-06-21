<?php
include 'db_connect.php';
 
$stmt = $pdo->query("SELECT * FROM conferences");
$conferences = $stmt->fetchAll();
?>

