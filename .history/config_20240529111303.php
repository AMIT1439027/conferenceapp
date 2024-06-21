<?php

$host ='localhost';
$db = 'conference_db';
$user = 'root';
$ = 'mysql143';

 try{
    $pdo = new PDO ("mysql:host=$host;dbname=$db",$user,$pass);
    $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }catch(PDOException $e){
    die("COuld not connect to the database ");
 }

?>