<?php 
    $form =  isset($_POST["editar"]);
    $form_02 = isset($_POST["instagram"]) && isset($_POST["facebook"]) && isset($_POST["linkedin"]);

    if($form_02){
        $login = $_SESSION["utilizador"]["login"];
        $data = setDataAtualizacao() . " - " . getUserAtualizacao($login)["nome"];
        $instagram = $_POST["instagram"];
        $facebook = $_POST["facebook"];
        $linkedin = $_POST["linkedin"];
        atualizarRedes($instagram, $facebook, $linkedin, $data);
        header("Location:".$url_backoffice."redes");
        exit();
    }
?>

<main class="caixa">
    <?php if(!$form):?>
        <h2 class="fontet1">Instagram</h2>
        <p class="fontep pcentrado"><?=getInstagram();?></p>
        <hr>
        <h2 class="fontet1">Facebook</h2>
        <p class="fontep pcentrado"><?=getFacebook();?></p>
        <hr>
        <h2 class="fontet1">Linkedin</h2>
        <p class="fontep pcentrado"><?=getLinkedin();?></p>
        <hr>
        <p class="fontep">Última atualização: <?=getDataAtualizacaoRedes();?></p>
        <form method="POST">
            <input type="submit" name="editar" class="fontep" value="Editar">
        </form> 
        <br><br>
    <?php else:?>
        <h2 class="fontet1">Editar (REDES SOCIAIS)</h2>
        <br><br>
        <form method="POST">
            <h2 class="fontet1">Instagram:</h2>
            <input type="text" class="largo" name="instagram" value="<?=getInstagram();?>" required="required">
            <br><br>
            <h2 class="fontet1">Facebook:</h2>
            <input type="text" class="largo" name="facebook" value="<?=getFacebook();?>" required="required">
            <br><br>
            <h2 class="fontet1">Linkedin:</h2>
            <input type="text" class="largo" name="linkedin" value="<?=getLinkedin();?>" required="required">
            <br><br>
            <input type="submit" value="Editar">
        </form>
    <?php endif;?>
</main>