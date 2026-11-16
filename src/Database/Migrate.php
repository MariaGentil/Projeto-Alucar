<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Maria\Alucar\Database\Conexao;

$conexao = new Conexao();
$pdo = $conexao->conectar();


$pdo->exec ("CREATE TABLE IF NOT EXISTS usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL
)");
$pdo->exec("CREATE TABLE IF NOT EXISTS clientes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    cpf VARCHAR(14) UNIQUE NOT NULL,
    telefone VARCHAR(20) NOT NULL
)");
$pdo->exec("CREATE TABLE IF NOT EXISTS carros(
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(100)NOT NULL,
    marca  VARCHAR(100)NOT NULL,
    cor    VARCHAR(50) NOT NULL,
    placa  VARCHAR(20) UNIQUE NOT NULL
)");
$pdo->exec("CREATE TABLE IF NOT EXISTS alugueis(
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    carro_id INT NOT NULL,
    data_inicio DATE NOT NULL,
    data_fim DATE NOT NULL,
    valor_total DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id),
    FOREIGN KEY (carro_id) REFERENCES carros(id)
)");