<?php

require_once __DIR__ . '/../../src/Database/Verificacao.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;
use Maria\Alucar\Models\Aluguel;
use Maria\Alucar\Models\Cliente;
use Maria\Alucar\Models\Carro;
use Maria\Alucar\View\Front;

$id = $_GET['id'];
    if (!$id){
        header('Location: index.php');
    exit;
}

$pdo = new Conexao()->conectar();
$aluguelModel = new Aluguel($pdo);
$clienteModel = new Cliente($pdo);
$carroModel = new Carro($pdo);

$aluguel = $aluguelModel->buscarPorId($id);

    if (!$aluguel){
        header('Location: index.php');
    exit;
}
$clientes = $clienteModel->listarClientes();
$carros = $carroModel->listarCarros();

$erro = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $cliente_id  = !empty($_POST['cliente_id']) ? $_POST['cliente_id'] : $aluguel['cliente_id'];
        $carro_id    = !empty($_POST['carro_id']) ? $_POST['carro_id'] : $aluguel['carro_id'];
        $data_inicio = !empty($_POST['data_inicio']) ? $_POST['data_inicio'] : $aluguel['data_inicio'];
        $data_fim    = !empty($_POST['data_fim']) ? $_POST['data_fim'] : $aluguel['data_fim'];
        $valor_total = !empty($_POST['valor_total']) ? $_POST['valor_total'] : $aluguel['valor_total'];

    if (empty($cliente_id) && !empty($carro_id) && !empty($data_inicio) && !empty($data_fim) && !empty($valor_total)){
        $erro = "Preencha todos os campos obrigatórios!";

}
    elseif ($data_fim < $data_inicio){
        $erro = "Não é possível cadastrar uma data final antes da data de início!";
}
    else{
        $aluguelModel->atualizarAlugueis($id, $cliente_id, $carro_id, $data_inicio, $data_fim, (float)$valor_total); 
        header('Location: index.php');
        exit;
}
}

$front = new Front();
require_once __DIR__ . '/../../Views/style.php';
$front->header('Editar Aluguel');
require_once __DIR__ . '/../../Views/Alugueis/EditarAluguel.php';
$front->footer();