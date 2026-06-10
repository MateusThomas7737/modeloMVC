<?php

class HomeController
{
    public function index()
    {
        if (!isset($_SESSION['usuario_id'])) {

            header('Location: index.php?rota=login');
            exit;
        }

        require __DIR__ . '/../views/home.php';
    }
}