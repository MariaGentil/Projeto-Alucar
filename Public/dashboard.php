<?php

session_start();

use Maria\Alucar\View\Front;

if (!$_SESSION['usuario_id']){
    header('Location: /login.php');
    exit;
}
require_once __DIR__ . '/../vendor/autoload.php';

$front = new Front();
$front->header('Alucar');
require_once __DIR__ . '/../Views/Dashboard.php';
$front->footer();