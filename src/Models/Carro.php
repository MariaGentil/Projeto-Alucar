<?php

namespace Maria\Alucar\Models;
use PDO;

class Carro{
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this-> pdo = $pdo;
}

    public function criar(string $modelo, string $marca, string $cor, string $placa): bool{
        $sql = $this->pdo->prepare("INSERT INTO carros (modelo, marca, cor, placa) VALUES(:modelo, :marca, :cor, :placa)");

        return $sql->execute([
            ':modelo' => $modelo,
            ':marca'  => $marca,
            ':cor'    => $cor,
            ':placa'  => $placa]);
}
    public function listarCarros(): array{
        $sql = $this->pdo->query("SELECT id, modelo, marca, cor, placa FROM carros ORDER BY id DESC");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
}
        public function excluirCarros($id): bool{
        $sql = $this->pdo->prepare("DELETE FROM carros WHERE id = :id");
        return $sql->execute(['id' => $id]);
        
}
    public function buscarId($id){
        $sql = $this->pdo->prepare("SELECT id, modelo, marca, cor, placa FROM carros WHERE id = :id");
        $sql->execute([':id' => $id]);
        return $sql->fetch(PDO::FETCH_ASSOC);
}
    public function atualizarCarros($id, $modelo, $marca, $cor, $placa): bool{
        $sql = $this->pdo->prepare("UPDATE carros SET modelo = :modelo, marca = :marca, cor = :cor, placa = :placa WHERE id = :id ");
        return $sql->execute([
            ':id'     => $id,
            ':modelo' => $modelo,
            ':marca'  => $marca,
            ':cor'    => $cor,
            ':placa'  => $placa]);
}
    public function verificarPlaca(string $placa): bool {
        $sql = $this->pdo->prepare("SELECT id FROM carros WHERE placa = :placa");
        $sql->execute([':placa' => $placa]);
        return $sql->rowCount() > 0; // Retorna true se a placa já existir
    }
}