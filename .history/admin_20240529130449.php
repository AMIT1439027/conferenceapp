<?php 
 include 'db_connect.php';
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $location = $_POST['location'];

    $stmt = $pdo-> prepare("INSERT INTO conferences (name, description, date, location)
 }


 ?>