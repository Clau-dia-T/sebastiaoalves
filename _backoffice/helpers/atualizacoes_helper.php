<?php

function setDataAtualizacao(){
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");
    return $data_atual;
}

function getUserAtualizacao($login){
    $user = selectSQLUnico("SELECT nome from utilizadores WHERE login='$login'");
    return $user;
}

?>