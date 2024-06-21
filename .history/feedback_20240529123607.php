
<?php
include 'db_connect.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user_id = $_POST['user_id'];
    $conference_id = $_POST[conference_id];
    $feedback = $_POST['feedback'];

    $stmt = $pdo->prepare("INSERT INTO  registrations (user_id,conference_id,feedback) VALUES(?,?,?)");
    $stmt->execute($user_id,$conference_id,$ feedback);
}
?>