<?php

function getListaDestaquesFull(){
    $resultados = selectSQL("SELECT * FROM destaques");
    return $resultados;
}

function atualizarDestaque($id, $imagem, $titulo, $categoria, $texto, $link, $data){
    iduSQL("UPDATE destaques SET imagem_destaque = '$imagem', titulo_destaque = '$titulo', categoria_destaque = '$categoria', texto_destaque = '$texto', link_destaque = '$link', data_atualizacao = '$data' WHERE id='$id'");
}

?>