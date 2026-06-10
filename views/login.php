<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Advocacia DataConsult</title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="login-page">
    <div class="login-box">

        <h2>Acesso ao Sistema</h2>

        <?php if (!empty($msg_erro)): ?>
            <div class="erro-mensagem">
                <?= htmlspecialchars($msg_erro) ?>
            </div>
        <?php endif; ?>

        <form action="index.php?rota=processar_login" method="post">

            <div class="input-group">
                <input
                    type="text"
                    name="usuario"
                    class="inputLogin"
                    placeholder="Usuário"
                    required
                    autocomplete="username"
                >
            </div>

            <div class="input-group password-group">
                <input
                    type="password"
                    name="senha"
                    id="senhaInput"
                    class="inputLogin"
                    placeholder="Senha"
                    required
                    autocomplete="current-password"
                >

                <span class="password-toggle" onclick="togglePasswordVisibility()">
                    👁
                </span>
            </div>

            <button type="submit" class="formBtn">
                Entrar
            </button>

        </form>

    </div>
</div>

</body>
</html>