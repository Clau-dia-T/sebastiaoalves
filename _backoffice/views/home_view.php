<?php 
    $form =  isset($_POST["editar"]);
    $form_02 = isset($_POST["imagem_autor_h"]) && isset($_POST["texto_ul"]);

    if($form_02){
        $login = $_SESSION["utilizador"]["login"];
        $data = setDataAtualizacao() . " - " . getUserAtualizacao($login)["nome"];
        $imagem = $_POST["imagem_autor_h"]; 
        $texto = $_POST["texto_ul"];
        atualizarHome($imagem, $texto, $data);
        header("Location:".$url_backoffice."home");
        exit();
    }
?>

<main class="caixa">
    <?php if(!$form):?>
        <h2 class="fontet1">Imagem do autor</h2>
        <img src="<?=getImagemAutorHome();?>" alt="imghome">
        <br><br><hr>
        <h2 class="fontet1">Texto do "Últimos Livros"</h2>
        <p class="fontep"><?=getTextoUlHome();?></p>
        <hr><br>
        <p class="fontep">Última atualização: <?=getDataAtualizacaoHome();?></p>
        <form method="POST">
            <input type="submit" class="fontep" value="Editar Home" name="editar">
        </form>
        <br><br>
    <?php else:?>
        <h2 class="fontet1">Editar (Home)</h2>
        <br>
        <form method="POST">
            <h2 class="fontet1">Link imagem do Autor: </h2>
            <input type="text" class="largo" name="imagem_autor_h" value="<?=getImagemAutorHome();?>" required="required">
            <br><br>
            <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank" class="fontep">Pesquisar imagens</a>
            <br><br>
            <h2 class="fontet1">Texto Últimos Livros:</h2>
            <textarea id="editor" class="largo" rows="10" name="texto_ul" required="required"><?=getTextoUlHome();?></textarea>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            <br><br>
            <input type="submit" value="Editar">
        </form>
    <?php endif;?>
</main>