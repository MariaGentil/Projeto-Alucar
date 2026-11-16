<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../src/Database/Verificacao.php';

use Maria\Alucar\Models\Cliente;
use Maria\Alucar\Database\Conexao;

$id = $_GET['id'];

if ($id){
    $pdo = new Conexao()->conectar();
    $clienteModel = new Cliente($pdo);
    $clienteModel->excluirClientes($id);
}
    header ('Location: index.php');