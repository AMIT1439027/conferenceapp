<?php 
 
 include 'config.php';

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("INSERT INTO users (username, password, email) VALUES(?,?,?)");

    $smt
    
 }


?>