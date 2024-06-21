<?php

$host ='localhost';
$db = 'conference_db';
$user = 'root';
$pass = 'mysql143';

 // Crerate connection

 $conn = new mysqli($host,$pass,$db,$user);

 // Check connection
 if($conn->connect_error){
    die("connection Failed");
 }


?>