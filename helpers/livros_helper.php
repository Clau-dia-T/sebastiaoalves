<?php
    function getListaLivros(){
        $resultado = selectSQL("SELECT id, titulo_livro FROM livros ORDER BY titulo_livro ASC");
        return $resultado;
    }

    function getImagemLivro($id){
        $resultado = selectSQLUnico("SELECT imagem_livro FROM livros WHERE id='$id'");
        return $resultado["imagem_livro"];
    }

    function getTituloLivro($id){
        $resultado = selectSQLUnico("SELECT titulo_livro FROM livros WHERE id='$id'");
        return $resultado["titulo_livro"];
    }

    function getTextoLivro($id){
        $resultado = selectSQLUnico("SELECT texto_livro FROM livros WHERE id='$id'");
        return $resultado["texto_livro"];
    }
?>