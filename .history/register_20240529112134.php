<?php 
 
 include 'config.php';

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASS);

    $stmt = $pdo->prepare("INSERT INTO users (username,email,password) VALUES(?,?,?)");

    $stmt->execute([$username,$email,$password]);
    
 }


?>