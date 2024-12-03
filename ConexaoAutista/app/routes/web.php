<?php

// Carrega controladores
require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/LoginController.php';
require_once '../app/controllers/RegisterController.php';

// Define as rotas
if ($_SERVER['REQUEST_URI'] === '/') {
    (new HomeController())->index();
} elseif ($_SERVER['REQUEST_URI'] === '/login') {
    (new LoginController())->login();
} elseif ($_SERVER['REQUEST_URI'] === '/register') {
    $registerController = new RegisterController();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $registerController->store();
    } else {
        $registerController->show();
    }
}
