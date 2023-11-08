<?php

function getListaLivrosFull(){
    $resultados = selectSQL("SELECT * FROM livros");
    return $resultados;
}

function editarLivro($id, $img_l, $titulo, $texto, $data){
    iduSQL("UPDATE livros SET imagem_livro = '$img_l', titulo_livro = '$titulo', texto_livro = '$texto', data_atualizacao = '$data' WHERE id='$id'");
}

function criarLivro($img_l, $titulo, $texto, $data){
    iduSQL("INSERT INTO livros (imagem_livro, titulo_livro, texto_livro, data_atualizacao) VALUES ('$img_l', '$titulo', '$texto', '$data')");
}

function apagarLivro($id){
    iduSQL("DELETE FROM livros WHERE id='$id'");
}

?>