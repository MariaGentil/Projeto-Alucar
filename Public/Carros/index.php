<?php

require_once __DIR__ . '/../../src/Database/Verificacao.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;
use Maria\Alucar\Models\Carro;
use Maria\Alucar\View\Front;

$front = new Front();
$pdo = new Conexao()->conectar();

$carroModel = new Carro($pdo);
$carros = $carroModel->listarCarros();

require_once __DIR__ . '/../../Views/style.php';
$front->header('Gerenciar Carros');
require_once __DIR__ . '/../../Views/Carros/index.php';
$front->footer();