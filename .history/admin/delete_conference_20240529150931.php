<?php
 include 'db_connect.php';

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM users WHERE conference[id]= ?");
    $stmt->execute([$id]);
    

    header("Location:admin.php");
 }
?>