<?php

session_start();

$rota = $_GET['rota'] ?? 'login';

switch ($rota) {
    case 'login':
        require_once __DIR__ . '/controllers/loginController.php';

        $controller = new LoginController();
        $controller->index();
        break;

    case 'processar_login':
        require_once __DIR__ . '/controllers/loginController.php';

        $controller = new LoginController();
        $controller->processarLogin();
        break;

    case 'home':

    require_once __DIR__ . '/controllers/homeController.php';

    $controller = new HomeController();
    $controller->index();

    break;

    case 'logout':
        require_once __DIR__ . '/controllers/loginController.php';

        $controller = new LoginController();
        $controller->logout();
        break;

    default:
        require_once __DIR__ . '/controllers/loginController.php';

        $controller = new LoginController();
        $controller->index();
        break;
}