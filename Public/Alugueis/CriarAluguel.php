<?php

require_once __DIR__ . '/../../src/Database/Verificacao.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;
use Maria\Alucar\Models\Aluguel;
use Maria\Alucar\Models\Cliente;
use Maria\Alucar\Models\Carro;
use Maria\Alucar\View\Front;

$pdo = (new Conexao())->conectar();
$aluguelModel = new Aluguel($pdo);
$clienteModel = new Cliente($pdo);
$carroModel = new Carro($pdo);

$clientes = $clienteModel->listarClientes();
$carros = $carroModel->listarCarros(); 

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $cliente_id  = $_POST['cliente_id'];
    $carro_id    = $_POST['carro_id'];
    $data_inicio = $_POST['data_inicio'];
    $data_fim    = $_POST['data_fim'];
    $valor_total = $_POST['valor_total'];

    if (!empty($cliente_id) && !empty($carro_id) && !empty($data_inicio) && !empty($data_fim) && !empty($valor_total)) {
        $aluguelModel->criar($cliente_id, $carro_id, $data_inicio, $data_fim, (float)$valor_total);
        header('Location: index.php');
        exit;
} 
    else{
        $erro = "Preencha todos os campos obrigatórios!";
}
}

$front = new Front();
require_once __DIR__ . '/../../Views/style.php';
$front->header('Cadastrar Aluguel');
require_once __DIR__ . '/../../Views/Alugueis/CriarAluguel.php';
$front->footer();