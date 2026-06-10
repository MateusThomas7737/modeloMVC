<?php

require_once __DIR__ . '/../core/BaseController.php';
require_once __DIR__ . '/../models/loginModel.php';

class LoginController extends BaseController
{
    public function index()
    {
        $msg_erro = $_SESSION['msg_erro'] ?? '';
        unset($_SESSION['msg_erro']);

        $this->view('login', [
            'msg_erro' => $msg_erro
        ]);
    }

    public function processarLogin()
    {
        $usuario = trim($_POST['usuario'] ?? '');
        $senha = trim($_POST['senha'] ?? '');

        if ($usuario === '' || $senha === '') {
            $_SESSION['msg_erro'] = 'Informe usuário e senha.';
            $this->redirect('login');
        }

        $loginModel = new LoginModel();

        $dadosUsuario = $loginModel->validarLogin($usuario, $senha);

        if (!$dadosUsuario) {
            $_SESSION['msg_erro'] = 'Usuário ou senha inválidos.';
            $this->redirect('login');
        }

        $_SESSION['usuario_id'] = $dadosUsuario['us_id'];
        $_SESSION['usuario_nome'] = $dadosUsuario['us_nome'];
        $_SESSION['usuario_login'] = $dadosUsuario['us_usuario'];

        $this->redirect('home');
    }

    public function logout()
    {
        session_destroy();

        $this->redirect('login');
    }
}