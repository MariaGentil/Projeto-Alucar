<?php

require_once __DIR__ . '/../../src/Database/Verificacao.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;
use Maria\Alucar\Models\Usuario;
use Maria\Alucar\View\Front;

$id = $_GET['id'];
if (!$id) {
    header('Location: index.php');
    exit;
}
$pdo = (new Conexao())->conectar();
$usuarioModel = new Usuario($pdo);
$usuario = $usuarioModel->buscarPorId($id);

if (!$usuario){
    header('Location: index.php');
    exit;
}
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (!empty($email)){
        $usuarioModel->atualizar($id, $email, $senha);
        header('Location: index.php');
        exit;
} 
}

$front = new Front();
require_once __DIR__ . '/../../Views/style.php';
$front->header('Editar Usuário');
require_once __DIR__ . '/../../Views/Usuarios/Editar.php';
$front->footer();