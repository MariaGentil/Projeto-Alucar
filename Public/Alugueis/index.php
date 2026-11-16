<?php

require_once __DIR__ . '/../../src/Database/Verificacao.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;
use Maria\Alucar\Models\Aluguel;
use Maria\Alucar\View\Front;

$front = new Front();
$pdo = new Conexao()->conectar();

$aluguelModel = new Aluguel($pdo);
$alugueis = $aluguelModel->listarAlugueis();

require_once __DIR__ . '/../../Views/style.php';
$front->header('Gerenciar Aluguéis');
require_once __DIR__ . '/../../Views/Alugueis/index.php';
$front->footer();