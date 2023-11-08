<?php
    if(verificarLogin()){
        header("Location: ".$url_backoffice."inicio");
        exit();
    }

    $form = isset($_POST["login"]) && isset($_POST["senha"]);
    $check_login = false;

    if($form){
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $check_login = fazerLogin($login, $senha); 
        if($check_login){
            header("Location: ".$url_backoffice."inicio");
            exit();
        }
    }
?>

<main class="caixa">
    <h3 class="fontemenus">Login</h3>
    <?php if(!$check_login && $form):?>
        <h2 class="fontep errologin">Login inválido, tente novamente.</h2>
    <?php endif;?>
    <form method="POST">
        <input type="text" class="fontep" name="login" placeholder="Utilizador" required="required" autofocus="autofocus">
        <br><br>
        <input type="password" class="fontep" name="senha" placeholder="Senha" required="required">
        <br><br>
        <input type="submit" class="fontep" value="Entrar">
    </form>
</main>