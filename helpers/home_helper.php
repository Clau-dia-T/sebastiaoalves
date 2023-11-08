<?php
    function getImagemAutorHome(){
        $resultado = selectSQLUnico("SELECT imagem_autor_home FROM home WHERE id='1'");
        return $resultado["imagem_autor_home"];
    }

    function getTextoUlHome(){
        $resultado = selectSQLUnico("SELECT texto_ul FROM home WHERE id='1'");
        return $resultado["texto_ul"];
    }
?>