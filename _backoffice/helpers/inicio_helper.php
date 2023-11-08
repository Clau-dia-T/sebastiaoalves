<?php
    session_start();

    function getNomeUtilizador(){
        $id = $_SESSION["utilizador"]["id"];
        $resultado = selectSQLUnico("SELECT nome FROM utilizadores WHERE id='$id'");
        return $resultado["nome"];
    }

    function getUltimoAcesso(){
        $id = $_SESSION["utilizador"]["id"];
        $resultado = selectSQLUnico("SELECT ultimo_acesso FROM utilizadores WHERE id='$id'");
        setDataUltimoAcesso($id);
        return $resultado["ultimo_acesso"];
    }
?>