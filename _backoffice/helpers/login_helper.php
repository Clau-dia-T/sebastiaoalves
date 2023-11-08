<?php

function fazerLogin($login, $senha){
    $utilizadores = selectSQLUnico("SELECT * from utilizadores WHERE login='$login' AND senha='$senha'");
    if(!empty($utilizadores)){
        session_start();
        $_SESSION["utilizador"] = $utilizadores;
        unset($_SESSION["utilizador"]["senha"]);
        return true;
    }
    else{
        return false;
    }
}

function verificarLogin(){
    if(!empty($_SESSION["utilizador"])){
        return true;
    }
    else{
        return false;
    }
}

function redirecionarLogin($url){
    if(!verificarlogin()){
        header("Location: " .$url);
        exit();
    }
}

function logOut(){
    session_destroy();
}

function getDataAtual(){
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");
    return $data_atual;
}

function setDataUltimoAcesso($id){
    $ultimo_acesso = getDataAtual();
    iduSQL("UPDATE utilizadores SET ultimo_acesso='$ultimo_acesso' WHERE id='$id'");
}

?>