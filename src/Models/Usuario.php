<?php
namespace Maria\Alucar\Models;

use PDO;

class Usuario{
    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
}
    public function criar(string $email, string $senha): bool{
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = $this->pdo->prepare("INSERT INTO usuarios (email, senha) VALUES (:email, :senha)");
        
        return $sql->execute([
            ':email' => $email,
            ':senha' => $senhaHash]);
}
    public function emailExiste(string $email): bool{
        $sql = $this->pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
        $sql->execute([':email' => $email]);
        return (bool) $sql->fetch();
}
    public function listarTodos(): array{
        $sql = $this->pdo->query("SELECT id, email FROM usuarios ORDER BY id DESC");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
}
    public function excluir($id): bool{
        $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        return $sql->execute(['id' => $id]);
}
    public function buscarPorId($id) {
        $sql = $this->pdo->prepare("SELECT id, email FROM usuarios WHERE id = :id");
        $sql->execute(['id' => $id]);
        return $sql->fetch(\PDO::FETCH_ASSOC);
}

public function atualizar($id, $email, $senha){
    if (!empty($senha)){
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = $this->pdo->prepare("UPDATE usuarios SET email = :email, senha = :senha WHERE id = :id");
        return $sql->execute(['email' => $email, 'senha' => $senhaHash, 'id' => $id]);
} 
    else{
        $sql = $this->pdo->prepare ("UPDATE usuarios SET email = :email WHERE id = :id");
        return $sql->execute(['email' => $email, 'id' => $id]);
}
}
}