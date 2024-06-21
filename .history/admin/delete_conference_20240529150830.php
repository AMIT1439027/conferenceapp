<?php
 include 'db_connect.php';

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM users WHERE conference= ?");
    $stmt->execute([$id]);
    DELETE FROM confereb WHERE `users`.`id`

    header("Location:admin.php");
 }
?>