<?php 
    namespace App\Services;

    class ConnectionService {
        
        public static function run($DBDRIVE = DBDRIVE, $DBUSER = DBUSER, $DBPASS = DBPASS, $DBHOST = DBHOST) {
            //
            // Conecta com o banco de dados
            //
            return $connPdo  = new \PDO(DBDRIVE.": host=" . DBHOST."; dbname=" . DBNAME, DBUSER, DBPASS);
        }
    }
?>