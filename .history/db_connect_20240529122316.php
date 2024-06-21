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
try{
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password );
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
cat

?>
