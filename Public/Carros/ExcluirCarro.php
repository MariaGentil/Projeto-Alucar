<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../src/Database/Verificacao.php';

use Maria\Alucar\Models\Carro;
use Maria\Alucar\Database\Conexao;

$id = $_GET['id'];

if ($id){
    $pdo = new Conexao()->conectar();
    $carroModel = new Carro($pdo);
    $carroModel->excluirCarros($id);
}
    header ('Location: index.php');