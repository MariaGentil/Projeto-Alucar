<?php

require_once __DIR__ . '/../../src/Database/Verificacao.php';
require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;
use Maria\Alucar\Models\Usuario;
use Maria\Alucar\View\Front;

$front = new Front();
$pdo = new Conexao()->conectar();

$usuarioModel = new Usuario($pdo);
$usuarios = $usuarioModel->listarTodos();

require_once __DIR__ . '/../../Views/style.php';
$front->header('Gerenciar Usuários');
require_once __DIR__ . '/../../Views/Usuarios/index.php';
$front->footer();