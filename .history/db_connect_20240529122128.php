<?php
$servername = "localhost";
$username = "root";
$password = "mysql143";
$dbname = "conference_db";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$pdo = new PDO("mysql:host=$servername;dban")
?>
