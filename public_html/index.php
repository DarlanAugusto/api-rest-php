<?php
    require_once "../vendor/autoload.php";

    if(isset($_GET['url'])) {

        $url = explode("/", $_GET['url']);

        if($url[0] === "api") {
            //
            // Está acessando a api
            //
            array_shift($url); // removendo o indice 0 => "api", pois nesse ponto não é mais necessário
            $service = "App\Services\\" . ucfirst($url[0]) . "Service"; // armazenando o serviço que será executado
            
            $method = strtolower($_SERVER["REQUEST_METHOD"]); // guardando método utilizado na requisição

            try {
                echo call_user_func_array(array(new $service, $method), $url); // utiliza um array pra fazer a chamata de um médoto/função
            } catch (\Exception $e) {
                //throw $th;
            }
        }
    }
    
?>