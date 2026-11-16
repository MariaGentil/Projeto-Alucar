<?php

namespace Maria\Alucar\Models;

use PDO;

class Cliente{
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this-> pdo = $pdo;
}
    public function criar (string $nome, string $email, string $cpf, string $telefone): bool{
        $sql = $this->pdo->prepare("INSERT INTO clientes (nome, email, cpf, telefone) VALUES(:nome, :email, :cpf, :telefone)");

        return $sql->execute([
            ':nome'     => $nome,
            ':email'    => $email,
            ':cpf'      => $cpf,
            ':telefone' => $telefone]);
}
    public function listarClientes(): array{
        $sql = $this->pdo->query("SELECT id, nome, email, cpf, telefone FROM clientes ORDER BY id DESC");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
}
    public function excluirClientes($id): bool{
        $sql = $this->pdo->prepare("DELETE FROM clientes WHERE id = :id");
        return $sql->execute(['id' => $id]);
}
    public function buscarID($id){
        $sql = $this->pdo->prepare("SELECT id, nome, email, cpf, telefone FROM clientes WHERE id = :id");
        $sql->execute([':id' => $id]);
        return $sql->fetch(PDO::FETCH_ASSOC);
}
    public function atualizarClientes($id, string $nome, string $email, string $cpf, string $telefone):bool{
        $sql = $this->pdo->prepare("UPDATE clientes SET nome = :nome, email = :email, cpf = :cpf, telefone = :telefone WHERE id = :id");
        return $sql->execute([
            ':id'       => $id,
            ':nome'     => $nome,
            ':email'    => $email,
            ':cpf'      => $cpf,
            ':telefone' => $telefone]);
}
    public function verificarExistencia(string $email, string $cpf): bool {
        $sql = $this->pdo->prepare("SELECT id FROM clientes WHERE email = :email || cpf = :cpf");
        $sql->execute([':email' => $email, ':cpf' => $cpf]);
        return $sql->rowCount() > 0;
}
























}
