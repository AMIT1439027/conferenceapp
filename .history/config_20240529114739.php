<?php


$servername = 'localhost';
$username = 'root';
 $password = 'mysqli143';
 $dbname = 'conference_db';
 // Crerate connection
 $conn = new mysqli($servername,$username,$password,$dbname);
 conn->exe

 // Check connection
 if($conn->connect_error){
    die("connection Failed");
 }


?>