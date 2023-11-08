<?php
$form = isset($_POST["senha"]) && isset($_POST["senha_nova"]) && isset($_POST["senha_nova_rep"]);
$check_senha = "";
$check_senha_nova = "";

if($form){
    $senha_atual = $_POST["senha"];
    $login = $_SESSION["utilizador"]["login"];
    $check_senha = verificarSenha($senha_atual, $login);
    if($check_senha){
        $senha_01 = $_POST["senha_nova"];
        $senha_02 = $_POST["senha_nova_rep"];
        if($senha_01 == $senha_02){
            mudarSenha($login, $senha_01);
            $check_senha_nova = true;
        }
        else{
            $check_senha_nova = false;
        }
    }
}
?>

<main class="caixa">
    <h2 class="fontet1">Alterar Senha</h2>
    <form method="POST">
        <?php if((!$check_senha && $form)):?>
            <h2 class="fontep errologin">Senha incorrecta, tente novamente.</h2>
        <?php elseif(!$check_senha_nova && $form):?>
            <h2 class="fontep errologin">Senhas novas não correspondem, tente novamente.</h2>
        <?php elseif($check_senha_nova && $form):?>
            <h2 class="fontep validadologin">Senha alterada com sucesso.</h2>
        <?php endif;?>
        <input type="password" class="medio" name="senha" placeholder="Senha Actual" required="required">
        <br><br>
        <input type="password" class="medio" name="senha_nova" placeholder="Nova Senha" required="required">
        <br><br>
        <input type="password" class="medio" name="senha_nova_rep" placeholder="Digite Novamente a Nova Senha" required="required">
        <br><br>
        <input type="submit" value="Alterar Senha">
    </form>
</main>