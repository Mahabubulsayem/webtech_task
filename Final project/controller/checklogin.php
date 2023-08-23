

<?php
session_start();
require_once('../model/db_connect.php');
$conn= db_conn();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $password = md5($_POST['password']);

 

    $query = "SELECT * FROM user WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

 

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

 

    if ($user) {
        $_SESSION['user'] = $user;

 

        if ($user['role'] == 'admin') {
            header("Location: ../view/admin/adminDashboard.php");
        } elseif ($user['role'] == 'user') {
            header("Location: ../view/client/clientDashboard.php ");
        } elseif ($user['role'] == 'advisor') {
            header("Location: ../view/advisor/advisordashboard.php");
        } else {
            echo "Invalid role.";
        }
    }
    else {
       
        echo "Invalid username or password."; 
        //header("Location: ../view/login.php");
    }
}
?>

 