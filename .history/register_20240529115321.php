<?php 
 
 include 'db_connect.php';
 session_start();

 if($_SERVER["REQUEST_METHOD"]=='POST'){
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
    <header>
        <h1>Conference Management System</h1>
        <nav>
        <a href="index.php">Home</a>
        <a href="#">Schedule Meeting</a>
        <a href="register.php">Register</a>
        <a href="#">Login</a>
        <a href="#">Admin</a>
    </nav>
</header>

 <main>
    <h2>Register</h2>
    <form >
     <label for ="username">Username:</label>
     <input type="text" id="username" name="username" required>
     <br>
     <label for ="emal">Email:</label>
     <input type="text" id="email" name="email" required>
     <br>
     <label for ="password">Password:</label>
     <input type="password" id="password" name="password" required>
     <br>
     <input type="submit" value="Register">

    </form>
 </main>
    
 <footer>
    <p>&copy; 2024 Conference Management</p>
 </footer>
    </header>
</body>
</html>