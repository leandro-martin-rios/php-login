<?php
require_once __DIR__ . "/../models/UserModel.php";

class LoginController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function login($username, $password) {
        $user = $this->userModel->validateUser($username, $password);
        if ($user) {
            header("Location: app/views/success.php");
            exit();
        } else {
            $error = "Usuario o contraseña incorrectos.";
            include __DIR__ . "/../views/login.php";
        }
    }
}
?>
