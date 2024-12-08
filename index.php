<?php
require_once __DIR__ . "/app/controllers/LoginController.php";

$controller = new LoginController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $controller->login($username, $password);
} else {
    include __DIR__ . "/app/views/login.php";
}
?>
