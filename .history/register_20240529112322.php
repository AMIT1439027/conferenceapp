<?php 
 
 include 'config.php';

 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username,email,password) VALUES(?,?,?)");

    $stmt->execute([$username,$email,$password]);
    
    echo 'Registration SuccessFull';
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header></header>
</body>
</html>