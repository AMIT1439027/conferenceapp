<?php
include 'db_connect.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM conference WHERE id = ?");
    $stmt->execute([$id]);

    
}

?>