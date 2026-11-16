<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../src/Database/Verificacao.php';

use Maria\Alucar\Models\Aluguel;
use Maria\Alucar\Database\Conexao;

$id = $_GET['id'];

if ($id){
    $pdo = new Conexao()->conectar();
    $aluguelModel = new Aluguel($pdo);
    $aluguelModel->excluirAlugueis($id);
}
    header ('Location: index.php');