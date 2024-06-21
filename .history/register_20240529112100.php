<?php 
 
 include 'config.php';

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_$_POST['password'];

    $stmt = $pdo->prepare("INSERT INTO users (username,email,password) VALUES(?,?,?)");

    $stmt->execute([$username,$email,$password]);
    
 }


?>