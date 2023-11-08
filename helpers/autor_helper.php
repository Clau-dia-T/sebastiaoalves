<?php
    function getImagemAutor(){
        $resultado = selectSQLUnico("SELECT imagem_autor FROM autor WHERE id='1'");
        return $resultado["imagem_autor"];
    }

    function getTextoAutor(){
        $resultado = selectSQLUnico("SELECT texto_autor FROM autor WHERE id='1'");
        return $resultado["texto_autor"];
    }
?>