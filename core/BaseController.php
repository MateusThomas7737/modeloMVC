<?php

class BaseController
{
    protected function view(string $view, array $dados = [])
    {
        extract($dados);

        require __DIR__ . '/../views/' . $view . '.php';
    }

    protected function redirect(string $rota)
    {
        header('Location: index.php?rota=' . $rota);
        exit;
    }

    protected function proteger()
    {
        if (empty($_SESSION['usuario_id'])) {
            $this->redirect('login');
        }
    }
}