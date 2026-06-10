<?php

require_once __DIR__ . '/../core/BaseModel.php';

class LoginModel extends BaseModel
{
    public function gerarHashSenha(string $senha): string
    {
        return password_hash($senha, PASSWORD_DEFAULT);
    }

    public function validarLogin(string $usuario, string $senha)
    {
        $sql = "
            SELECT
                us_id,
                us_usuario,
                us_senha,
                us_nome,
                us_email,
                us_ativo
            FROM usuarios
            WHERE us_usuario = :usuario
            LIMIT 1
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->execute();

        $dadosUsuario = $stmt->fetch();

        if (!$dadosUsuario) {
            return false;
        }

        if (!password_verify($senha, $dadosUsuario['us_senha'])) {
            return false;
        }

        if ((int)$dadosUsuario['us_ativo'] !== 1) {
            return false;
        }

        return $dadosUsuario;
    }
}