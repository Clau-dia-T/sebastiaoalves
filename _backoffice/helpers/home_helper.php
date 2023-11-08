<?php

function atualizarHome($imagem, $texto, $data){
    iduSQL("UPDATE home SET imagem_autor_home = '$imagem', texto_ul = '$texto', data_atualizacao='$data' WHERE id='1'");
}

function getDataAtualizacaoHome(){
    $resultado = selectSQLUnico("SELECT data_atualizacao FROM home WHERE id='1'");
    return $resultado["data_atualizacao"];
}

?>