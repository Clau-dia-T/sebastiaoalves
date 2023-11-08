<?php 
    $form =  isset($_POST["editar"]);
    $form_02 = isset($_POST["telefone"]) && isset($_POST["morada"]) && isset($_POST["email"]) && isset($_POST["horario"]);

    if($form_02){
        $login = $_SESSION["utilizador"]["login"];
        $data = setDataAtualizacao() . " - " . getUserAtualizacao($login)["nome"];
        $telefone = $_POST["telefone"];
        $morada = $_POST["morada"];
        $email = $_POST["email"];
        $horario = $_POST["horario"];
        atualizarContactos($telefone, $morada, $email, $horario, $data);
        header("Location:".$url_backoffice."contactos");
        exit();
    }
?>

<main class="caixa">
    <?php if(!$form):?>
        <h2 class="fontet1">Telefone</h2>
        <p class="fontep pcentrado"><?=getTelefone();?></p>
        <hr>
        <h2 class="fontet1">Morada</h2>
        <p class="fontep pcentrado"><?=getMorada();?></p>
        <hr>
        <h2 class="fontet1">Email</h2>
        <p class="fontep pcentrado"><?=getEmail();?></p>
        <hr>
        <h2 class="fontet1">Horário</h2>
        <p class="fontep pcentrado"><?=getHorario();?></p>
        <hr>
        <p class="fontep">Última atualização: <?=getDataAtualizacaoContactos();?></p>
        <form method="POST">
            <input type="submit" name="editar" class="fontep" value="Editar">
        </form> 
        <br><br>
    <?php else:?>
        <h2 class="fontet1">Editar (CONTACTOS)</h2>
        <br><br>
        <form method="POST">
            <h2 class="fontet1">Telefone:</h2>
            <input type="text" class="largo" name="telefone" value="<?=getTelefone();?>" required="required">
            <br><br>
            <h2 class="fontet1">Morada:</h2>
            <input type="text" class="largo" name="morada" value="<?=getMorada();?>" required="required">
            <br><br>
            <h2 class="fontet1">Email:</h2>
            <input type="text" class="largo" name="email" value="<?=getEmail();?>" required="required">
            <br><br>
            <h2 class="fontet1">Horário:</h2>
            <input type="text" class="largo" name="horario" value="<?=getHorario();?>" required="required">
            <br><br>
            <input type="submit" value="Editar">
        </form>
    <?php endif;?>
</main>