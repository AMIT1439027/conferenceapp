<?php
$servername = 'localhost';
$username = 'root'
$db = 'conference_db';
$user = 'root';


 // Crerate connection

 $conn = new mysqli($host,$pass,$db,$user);

 // Check connection
 if($conn->connect_error){
    die("connection Failed");
 }


?>