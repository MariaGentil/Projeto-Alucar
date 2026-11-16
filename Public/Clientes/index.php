<?php

require_once __DIR__ . '/../../src/Database/Verificacao.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;
use Maria\Alucar\Models\Cliente;
use Maria\Alucar\View\Front;

$front = new Front();
$pdo = new Conexao()->conectar();

$clienteModel = new Cliente($pdo);
$clientes = $clienteModel->listarClientes();

require_once __DIR__ . '/../../Views/style.php';
$front->header('Gerenciar Clientes');
require_once __DIR__ . '/../../Views/Clientes/index.php';
$front->footer();