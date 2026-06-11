<?php
$rotaAtual = $_GET['rota'] ?? 'home';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?? 'Sistema Advocacia'; ?></title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<body>

<header class="layout-sistema">

    <aside class="sidebar">

        <div class="sidebarLogo">
            <img src="img/logo.png" alt="Logo">
        </div>

        <ul class="viewsLinks sbTopo">

            <li class="<?= $rotaAtual === 'home' ? 'ativo' : '' ?>">
                <i class="fa fa-dashboard"></i>
                <span>Home</span>

                <ul class="viewsLinks sbConteudo">
                    <li>
                        <a href="index.php?rota=home">Dashboard</a>
                    </li>
                </ul>
            </li>

            <li class="<?= $rotaAtual === 'clientes' ? 'ativo' : '' ?>">
                <i class="fa fa-users"></i>
                <span>Clientes</span>

                <ul class="viewsLinks sbConteudo">
                    <li>
                        <a href="index.php?rota=clientes">Cadastro</a>
                    </li>
                </ul>
            </li>

        </ul>

        <div class="logout">
            <a href="index.php?rota=logout">
                <i class="fa fa-sign-out"></i>
                <span>Sair</span>
            </a>
        </div>

    </aside>

    <main class="content">