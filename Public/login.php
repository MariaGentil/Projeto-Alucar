<?php

session_start();
require_once __DIR__ . '/../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;
use Maria\Alucar\View\Front;

$front = new Front();
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conexao = new Conexao();
    $pdo = $conexao->conectar();

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql->execute([':email'=> $email]);
    $usuario = $sql->fetch();

if ($usuario && password_verify($senha, $usuario['senha'])) {
    $_SESSION['usuario_id'] = $usuario['id'];
        header('Location: dashboard.php');
    exit;
}
    else{
        $erro = "E-mail ou senha incorretos!";
}
}
require_once __DIR__ . '/../Views/login.php';