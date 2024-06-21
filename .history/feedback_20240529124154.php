
<?php
include 'db_connect.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user_id = $_POST['user_id'];
    $conference_id = $_POST['conference_id'];
    $feedback = $_POST['feedback'];

    $stmt = $pdo->prepare("INSERT INTO  registrations (user_id,conference_id,feedback) VALUES(?,?,?)");

    $stmt->execute($user_id,$conference_id,$feedback);

    echo "Feedback submitted";
}

$stmt_users = $pdo->query("SELECT * FROM users");
$users = $stmt_users->fetchAll();

$stmt_conferences = $pdo->query("SELECT * FROM conferences");
$conferences = $stmt_conferences->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedbackt</title>
</head>
<body>
    
</body>
</html>