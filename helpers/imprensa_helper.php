<?php
    function getListaImprensa(){
        $resultado = selectSQL("SELECT id FROM imprensa");
        return $resultado;
    }

    function getImagemImprensa($id){
        $resultado = selectSQLUnico("SELECT imagem_imprensa FROM imprensa WHERE id='$id'");
        return $resultado["imagem_imprensa"];
    }

    function getTituloImprensa($id){
        $resultado = selectSQLUnico("SELECT titulo_imprensa FROM imprensa WHERE id='$id'");
        return $resultado["titulo_imprensa"];
    }

    function getTextoImprensa($id){
        $resultado = selectSQLUnico("SELECT texto_imprensa FROM imprensa WHERE id='$id'");
        return $resultado["texto_imprensa"];
    }

    function getDataPubImprensa($id){
        $resultado = selectSQLUnico("SELECT data_publicacao_imprensa FROM imprensa WHERE id='$id'");
        return $resultado["data_publicacao_imprensa"];
    }
?>