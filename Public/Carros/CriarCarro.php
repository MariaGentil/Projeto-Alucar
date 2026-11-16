<?php

require_once __DIR__ . '/../../src/Database/Verificacao.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;
use Maria\Alucar\Models\Carro;
use Maria\Alucar\View\Front;

$front = new Front();
$pdo = new Conexao()->conectar();
$carroModel = new Carro($pdo);

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $modelo = $_POST['modelo'];
    $marca  = $_POST['marca'];
    $cor    = $_POST['cor'];
    $placa  = $_POST['placa'];

if (!empty($modelo) && !empty($placa)){

    if ($carroModel->verificarPlaca($placa)){
        $erro = "Esta placa já está cadastrada no sistema!";
} 
    else{
        $carroModel->criar($modelo, $marca, $cor, $placa);
         header('Location: index.php');
    exit;
}
} 
    else{
        $erro = "Erro ao cadastrar cliente.";
} 
}

require_once __DIR__ . '/../../Views/style.php';
$front->header('Criar novo carro');
require_once __DIR__ . '/../../Views/Carros/CriarCarro.php';
$front->footer();
