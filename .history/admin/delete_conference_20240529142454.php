<?php
 include 'db_connect.php';

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM registrations WHERE conference_id= ?");
    $stmt->execute()
 }
?>