<?php

require_once __DIR__ . '/../../src/Database/Verificacao.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;
use Maria\Alucar\Models\Usuario;
use Maria\Alucar\View\Front;

$front = new Front();
$pdo = (new Conexao())->conectar();
$usuarioModel = new Usuario($pdo);

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (!empty($email) && !empty($senha)) {
        if ($usuarioModel->emailExiste($email)) {
            $erro = "Este e-mail já está cadastrado!";
} 
        else{
            $usuarioModel->criar($email, $senha);
                header('Location: index.php');
} 
}
else{
    $erro = "Erro ao cadastrar: ";
}
}

require_once __DIR__ . '/../../Views/style.php';
$front->header('Criar Novo Usuário');
require_once __DIR__ . '/../../Views/Usuarios/Criar.php';
$front->footer();