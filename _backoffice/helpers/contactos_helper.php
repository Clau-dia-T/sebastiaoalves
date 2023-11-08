<?php

function atualizarContactos($telefone, $morada, $email, $horario, $data){
    iduSQL("UPDATE contactos SET telefone = '$telefone', morada = '$morada', email= '$email', horario = '$horario', data_atualizacao = '$data' WHERE id='1'");
}

function getDataAtualizacaoContactos(){
    $resultado = selectSQLUnico("SELECT data_atualizacao FROM contactos WHERE id='1'");
    return $resultado["data_atualizacao"];
}

?>