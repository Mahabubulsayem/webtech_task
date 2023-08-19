<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>Create an Account</h2>
    <form action="process_registration.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>

<?php
session_start();
require_once 'config.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/AuthController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'home';
$loggedIn = isset($_SESSION['user_id']);

$homeController = new HomeController();
$authController = new AuthController($conn);

switch ($action) {
    case 'home':
        $homeController->index();
        break;
    case 'register':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $authController->register($username, $password);
        }
        break;
    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if ($authController->login($username, $password)) {
                header('Location: dashboard.php');
            } else {
                // Handle login failure
            }
        }
        break;
    case 'logout':
        $authController->logout();
        header('Location: home.php');
        break;
    default:
        // Handle invalid actions
        break;
}
?>
