<?php
 include 'db_connect.php';

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM  WHERE conference_id= ?");
    $stmt->execute([$id]);
    DELETE FROM `users` WHERE `users`.`id`

    header("Location:admin.php");
 }
?>