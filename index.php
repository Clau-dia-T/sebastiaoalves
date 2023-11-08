<?php
require_once("requisitos.php");

$rota_completa = $_SERVER["REQUEST_URI"];
$rotas = str_replace($rota_fixa, "", $rota_completa);
$rotas = explode("/", $rotas);

switch($rotas[0]){
    case "":
    case "home":
        require_once("models/home_model.php");
        break;

    case "autor":
        require_once("models/autor_model.php");
        break;

    case "livros":
        require_once("models/livros_model.php");
        break;
    
    case "imprensa":
        require_once("models/imprensa_model.php");
        break;

    case "contactos":
        require_once("models/contactos_model.php");
        break;

   
    case "backoffice":
        
        if(empty($rotas[1])){
            $rotas[1] = "";
        }

        switch($rotas[1]){
            case "":
            case "login":
                require_once("_backoffice/models/login_model.php");
                break;

            case "inicio":
                require_once("_backoffice/models/inicio_model.php");
                break;

            case "home":
                require_once("_backoffice/models/home_model.php");
                break;

            case "banners":
                require_once("_backoffice/models/banners_model.php");
                break;
    
            case "autor":
                require_once("_backoffice/models/autor_model.php");
                break;

            case "livros":
                require_once("_backoffice/models/livros_model.php");
                break;
                
            case "destaques":
                require_once("_backoffice/models/destaques_model.php");
                break;

            case "imprensa":
                require_once("_backoffice/models/imprensa_model.php");
                break;

            case "contactos":
                require_once("_backoffice/models/contactos_model.php");
                break;

            case "redes":
                require_once("_backoffice/models/redes_model.php");
                break;

            case "configuracoes":
                require_once("_backoffice/models/configuracoes_model.php");
                break;

            case "sair":
                require_once("_backoffice/models/sair_model.php");
                break;

            default:
                require_once("_backoffice/models/erro_model.php");
                break;
        }
        break;

    default:
        require_once("models/erro_model.php");
        break;
}
?>