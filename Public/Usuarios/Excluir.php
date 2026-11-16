<?php

require_once __DIR__ . '/../../src/Database/Verificacao.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Models\Usuario;
use Maria\Alucar\Database\Conexao;

$id = $_GET['id'];

if ($id){
    $pdo = new Conexao()->conectar();
    $usuarioModel = new Usuario($pdo);
    $usuarioModel->excluir($id);
}
header ('Location: index.php');