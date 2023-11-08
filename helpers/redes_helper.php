<?php
    function getInstagram(){
        $resultado = selectSQLUnico("SELECT instagram FROM redes WHERE id='1'");
        return $resultado["instagram"];
    }

    function getFacebook(){
        $resultado = selectSQLUnico("SELECT facebook FROM redes WHERE id='1'");
        return $resultado["facebook"];
    }

    function getLinkedin(){
        $resultado = selectSQLUnico("SELECT linkedin FROM redes WHERE id='1'");
        return $resultado["linkedin"];
    }
?>