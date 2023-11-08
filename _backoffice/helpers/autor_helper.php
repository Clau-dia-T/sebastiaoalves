<?php

function atualizarAutor($imagem, $texto, $data){
    iduSQL("UPDATE autor SET imagem_autor = '$imagem', texto_autor = '$texto', data_atualizacao = '$data' WHERE id='1'");
}

function getDataAtualizacaoAutor(){
    $resultado = selectSQLUnico("SELECT data_atualizacao FROM autor WHERE id='1'");
    return $resultado["data_atualizacao"];
}

?>