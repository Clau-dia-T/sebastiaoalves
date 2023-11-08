<?php
    function getListaDestaques(){
        $resultado = selectSQL("SELECT id, imagem_destaque, titulo_destaque, categoria_destaque, texto_destaque, link_destaque FROM destaques");
        return $resultado;
    }

    function getImagemDestaque($id){
        $resultado = selectSQLUnico("SELECT imagem_destaque FROM destaques WHERE id='$id'");
        return $resultado["imagem_destaque"];
    }

    function getTituloDestaque($id){
        $resultado = selectSQLUnico("SELECT titulo_destaque FROM destaques WHERE id='$id'");
        return $resultado["titulo_destaque"];
    }

    function getCategoriaDestaque($id){
        $resultado = selectSQLUnico("SELECT categoria_destaque FROM destaques WHERE id='$id'");
        return $resultado["categoria_destaque"];
    }

    function getTextoDestaque($id){
        $resultado = selectSQLUnico("SELECT texto_destaque FROM destaques WHERE id='$id'");
        return $resultado["texto_destaque"];
    }

    function getLinkDestaque($id){
        $resultado = selectSQLUnico("SELECT link_destaque FROM destaques WHERE id='$id'");
        return $resultado["link_destaque"];
    }
?>