<?php

function verificarSenha($senha_atual, $login){
    $senha = selectSQLUnico("SELECT senha from utilizadores WHERE login='$login'");
    if($senha["senha"] == $senha_atual){
        return true;
    }
    else{
        return false;
    }
}

function mudarSenha($login, $senha){
    iduSQL("UPDATE utilizadores SET senha='$senha' WHERE login='$login'");
}

?>