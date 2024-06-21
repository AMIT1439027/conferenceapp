 <?php
//  include 'db_connect.php';

//  if($_SERVER["REQUEST_METHOD"]=="POST"){
//     $id = $_POST['id'];

//     $stmt = $pdo->prepare("DELETE FROM `users` WHERE `id`= ?");
//     $stmt->execute([$id]);
    

//     header("Location:admin.php");
//  }


include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE =$id";

    if ($conn->query($query) === TRUE) {
        header("Location: admin.php");
    } else {
        echo "Error: " . $conn->error;
    }
}

?>