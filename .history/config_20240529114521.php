<?php


$servername = 'localhost';
$username = 'root';
 $password = 'mysqli143';
 // Crerate connection

 $conn = new mysqli();

 // Check connection
 if($conn->connect_error){
    die("connection Failed");
 }


?>