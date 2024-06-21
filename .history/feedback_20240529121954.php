
<?php
include 'db_connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($query) === TRUE) {
        $_SESSION['message'] = "Registration successful!";
        header("Location: index.php");
    } else {
        $_SESSION['message'] = "Error: " . $conn->error;
    }
}
?>