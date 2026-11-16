<?php

namespace Maria\Alucar\Models;
use PDO;

class Aluguel{
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
}
    public function criar(int $cliente_id, int $carro_id, string $data_inicio, string $data_fim, float $valor_total): bool {
        $sql = $this->pdo->prepare("INSERT INTO alugueis (cliente_id, carro_id, data_inicio, data_fim, valor_total) VALUES (:cliente_id, :carro_id, :data_inicio, :data_fim, :valor_total)");

        return $sql->execute([
            ':cliente_id'  => $cliente_id,
            ':carro_id'    => $carro_id,
            ':data_inicio' => $data_inicio,
            ':data_fim'    => $data_fim,
            ':valor_total' => $valor_total]);
}
    public function listarAlugueis(): array{
        $sql = $this->pdo->query("
            SELECT a.id, c.nome AS cliente, ca.modelo AS carro, a.data_inicio, a.data_fim, a.valor_total 
            FROM alugueis a
            JOIN clientes c ON a.cliente_id = c.id
            JOIN carros ca ON a.carro_id = ca.id
            ORDER BY a.id DESC
        ");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
}
    public function buscarPorId($id){
        $sql = $this->pdo->prepare("SELECT id, cliente_id, carro_id, data_inicio, data_fim, valor_total FROM alugueis WHERE id = :id");
        $sql->execute([':id' => $id]);
        return $sql->fetch(PDO::FETCH_ASSOC);
}
    public function excluirAlugueis($id): bool{
        $sql = $this->pdo->prepare("DELETE FROM alugueis WHERE id = :id");
        return $sql->execute([':id' => $id]);
}
    public function atualizarAlugueis(int $id, int $cliente_id, int $carro_id, string $data_inicio, string $data_fim, float $valor_total): bool{
        $sql = $this->pdo->prepare("UPDATE alugueis SET cliente_id = :cliente_id, carro_id = :carro_id, data_inicio = :data_inicio, data_fim = :data_fim, valor_total = :valor_total WHERE id = :id");

        return $sql->execute([
            ':id'          => $id,
            ':cliente_id'  => $cliente_id,
            ':carro_id'    => $carro_id,
            ':data_inicio' => $data_inicio,
            ':data_fim'    => $data_fim,
            ':valor_total' => $valor_total]);
}
}