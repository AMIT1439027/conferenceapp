<?php
include 'db_connect.php';
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $food = $conn->query("SELECT * FROM foods WHERE id=$id")->fetch_assoc();
}
?>