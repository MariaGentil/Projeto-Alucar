<?php

require_once __DIR__ . '/../../src/Database/Verificacao.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;
use Maria\Alucar\Models\Carro;
use Maria\Alucar\View\Front;

$id = $_GET['id'];
    if (!$id){
        header('Location: index.php');
    exit;
}
$pdo = new Conexao()->conectar();
$carroModel = new Carro($pdo);

$carro = $carroModel->buscarId($id);

    if (!$carro){
        header('Location: index.php');
    exit;
}
$erro = '';

    if($_SERVER ['REQUEST_METHOD'] === 'POST'){
        $modelo = !empty($_POST['modelo']) ? $_POST['modelo']: $carro['modelo'];
        $marca = !empty($_POST['marca']) ? $_POST['marca']: $carro['marca'];
        $cor = !empty($_POST['cor']) ? $_POST['cor']: $carro['cor'];
        $placa = !empty($_POST['placa']) ? $_POST['placa']: $carro['placa'];

    if (!empty($cor)){
        $carroModel->atualizarCarros($id, $modelo, $marca, $cor, $placa); 
        header('Location: index.php');
        exit;
}
    else{
        $erro = "Preencha todos os campos obrigatórios!";
}
}
$front = new Front();
require_once __DIR__ . '/../../Views/style.php';
$front->header('Editar Carro');
require_once __DIR__ . '/../../Views/Carros/EditarCarro.php';
$front->footer();
