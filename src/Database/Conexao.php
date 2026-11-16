<?php

namespace Maria\Alucar\Database;

use PDO;
use PDOException;

class Conexao{
    public function conectar(){
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=alucar;charset=utf8", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
}
        catch (PDOException $e){
        echo "Erro na conexão." . $e->getMessage();
}
}
}