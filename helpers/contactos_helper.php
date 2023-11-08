<?php
    function getTelefone(){
        $resultado = selectSQLUnico("SELECT telefone FROM contactos WHERE id='1'");
        return $resultado["telefone"];
    }

    function getMorada(){
        $resultado = selectSQLUnico("SELECT morada FROM contactos WHERE id='1'");
        return $resultado["morada"];
    }

    function getEmail(){
        $resultado = selectSQLUnico("SELECT email FROM contactos WHERE id='1'");
        return $resultado["email"];
    }

    function getHorario(){
        $resultado = selectSQLUnico("SELECT horario FROM contactos WHERE id='1'");
        return $resultado["horario"];
    }
?>