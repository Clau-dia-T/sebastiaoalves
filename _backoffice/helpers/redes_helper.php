<?php

function atualizarRedes($instagram, $facebook, $linkedin, $data){
    iduSQL("UPDATE redes SET instagram = '$instagram', facebook = '$facebook', linkedin= '$linkedin', data_atualizacao = '$data' WHERE id='1'");
}

function getDataAtualizacaoRedes(){
    $resultado = selectSQLUnico("SELECT data_atualizacao FROM redes WHERE id='1'");
    return $resultado["data_atualizacao"];
}

?>