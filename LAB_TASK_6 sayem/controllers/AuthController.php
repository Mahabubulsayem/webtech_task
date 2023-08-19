<?php
require_once 'models/UserModel.php';

class AuthController {
    private $userModel;

    public function __construct($conn) {
        $this->userModel = new UserModel($conn);
    }

    public function register($username, $password) {
        return $this->userModel->createUser($username, $password);
    }

    public function login($username, $password) {
        $user = $this->userModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            return true;
        } else {
            return false;
        }
    }

    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }

    public function logout() {
        session_destroy();
    }
}
?>
