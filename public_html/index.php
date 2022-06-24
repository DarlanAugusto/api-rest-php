<?php
    require_once "../vendor/autoload.php";

    if(isset($_GET['url'])) {

        $url = explode("/", $_GET['url']);

        if($url[0] === "api") {

            echo "Está acessando a API.";
        }
    }
    
?>