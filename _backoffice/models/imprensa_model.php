<?php
//Header
require_once("_backoffice/componentes/header_bo02.php");
//Main
if(!empty($rotas[2])){
    switch($rotas[2]){
        case "editar":
            require_once("_backoffice/views/imprensa_editar_view.php");
            break;
        case "criar":
            require_once("_backoffice/views/imprensa_criar_view.php");
            break;
        case "apagar":
            require_once("_backoffice/views/imprensa_apagar_view.php");
            break;
        default:
            require_once("views/erro_view.php");  
            break;
    }
}
else{
    require_once("_backoffice/views/imprensa_view.php");
}
//Footer
require_once("_backoffice/componentes/footer_bo.php");
?>