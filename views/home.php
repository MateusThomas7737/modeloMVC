<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <link rel="stylesheet" href="css/global.css">
</head>
<body>

<h1>Bem-vindo ao Sistema</h1>

<p>
    Usuário:
    <?= htmlspecialchars($_SESSION['usuario_nome']) ?>
</p>

<a href="index.php?rota=logout">
    Sair
</a>

</body>
</html>