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

        $sql = "SELECT * FROM " . self::$table . " WHERE id = :id";
        $stmt = $connPdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            //
            // Retorna o usuário encontrado
            //
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            //
            // Usuário não encontrado, retorna erro
            //
            throw new \Exception("Nenhum usuário encontrado!");
        }
    }
}

?>