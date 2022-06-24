<?php
    namespace App\Models;

use App\Services\ConnectionService;
use PDO;

class User {
    private static $table = "user"; // nome da tabela no BD
    
    public static function get(int $id) {
        //
        // Selecionando dados do Usuario
        //
        $connPdo = ConnectionService::run(); // conecta com o banco

        $sql = "SELECT * FROM " . self::$table . " WHERE id = :id"; // select na tabela user

        $stmt = $connPdo->prepare($sql); // prepara a sql para ser executada
        $stmt->bindValue(':id', $id); // informa o id do usuário ao parâmetro da sql, para evitar SQL INJECTION
        $stmt->execute(); // executa a sql

        if($stmt->rowCount() > 0) {
            //
            // Retorna o usuário encontrado
            //
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } 
        else {
            //
            // Usuário não encontrado, retorna erro
            //
            throw new \Exception("Nenhum usuário encontrado!");
        }
    }
}

?>