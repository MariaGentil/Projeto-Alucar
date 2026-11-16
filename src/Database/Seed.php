<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use Maria\Alucar\Database\Conexao;

$pdo = new Conexao();
$pdo = $pdo->conectar();

$senhaHash = password_hash('123', PASSWORD_DEFAULT); 

$sql = "INSERT INTO usuarios (email, senha) VALUES ('maria@gmail.com', '$senhaHash')";
$pdo->exec($sql);
echo "Usuário inserido!";