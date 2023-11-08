<?php

function getListaImprensaFull(){
    $resultados = selectSQL("SELECT * FROM imprensa");
    return $resultados;
}

function editarImprensa($id, $imagem, $titulo, $texto, $data, $data_atualizacao){
    iduSQL("UPDATE imprensa SET imagem_imprensa = '$imagem', titulo_imprensa = '$titulo', texto_imprensa = '$texto', data_publicacao_imprensa = '$data', data_atualizacao = '$data_atualizacao' WHERE id='$id'");
}

function criarImprensa($imagem, $titulo, $texto, $data, $data_atualizacao){
    iduSQL("INSERT INTO imprensa (imagem_imprensa, titulo_imprensa, texto_imprensa, data_publicacao_imprensa, data_atualizacao) VALUES ('$imagem', '$titulo', '$texto', '$data', '$data_atualizacao')");
}

function apagarImprensa($id){
    iduSQL("DELETE FROM imprensa WHERE id='$id'");
}

?>