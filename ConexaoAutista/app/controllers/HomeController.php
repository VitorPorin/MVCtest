<?php

class HomeController {
    public function index() {
        require_once '../app/views/layout/header.php';
        require_once '../app/views/home.php';
        require_once '../app/views/layout/footer.php';
    }
}
