<?php

require_once __DIR__ . '/../../src/Database/Verificacao.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;
use Maria\Alucar\Models\Cliente;
use Maria\Alucar\View\Front;

$id = $_GET['id'];
if (!$id){
        header('Location: index.php');
        exit;
}
$pdo = (new Conexao())->conectar();
$clienteModel = new Cliente($pdo);
$cliente = $clienteModel->buscarId($id);

if (!$cliente){
        header('Location: index.php');
        exit;
}
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = !empty($_POST['nome']) ? $_POST['nome'] : $cliente['nome'];
    $email = !empty($_POST['email']) ? $_POST['email'] : $cliente['email'];
    $cpf = !empty($_POST['cpf']) ? $_POST['cpf'] : $cliente['cpf'];
    $telefone = !empty($_POST['telefone']) ? $_POST['telefone'] : $cliente['telefone'];
}
if (!empty($nome)){
        $clienteModel->atualizarClientes($id, $nome, $email, $cpf, $telefone); 
        header('Location: index.php');
        exit;
} 
else{
        $erro = "Preencha todos os campos obrigatórios!";
}
$front = new Front();
require_once __DIR__ . '/../../Views/style.php';
$front->header('Editar Cliente');
require_once __DIR__ . '/../../Views/Clientes/EditarCliente.php';
$front->footer();