<?php

require_once __DIR__ . '/../../src/Database/Verificacao.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;
use Maria\Alucar\Models\Cliente;
use Maria\Alucar\View\Front;

$front = new Front();
$pdo = new Conexao()->conectar();
$clienteModel = new Cliente($pdo);

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];

    if (!empty($nome) && !empty($email) && !empty($cpf)){
    if ($clienteModel->verificarExistencia($email, $cpf)) {
        $erro = "Este E-mail ou CPF já está cadastrado!";
}
    else{
        $clienteModel->criar($nome, $email, $cpf, $telefone);    
        header('Location: index.php');
    exit;
} 
} 
    else{
        $erro = "Preencha os campos obrigatórios!";
}
}

require_once __DIR__ . '/../../Views/style.php';
$front->header('Criar novo cliente');
require_once __DIR__ . '/../../Views/Clientes/CriarCliente.php';
$front->footer();