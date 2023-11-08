<?php 
    $form =  isset($_POST["editar"]);
    $form_02 = isset($_POST["imagem_autor"]) && isset($_POST["texto_autor"]);

    if($form_02){
        $login = $_SESSION["utilizador"]["login"];
        $data = setDataAtualizacao() . " - " . getUserAtualizacao($login)["nome"];
        $imagem = $_POST["imagem_autor"]; 
        $texto = $_POST["texto_autor"];
        atualizarAutor($imagem, $texto, $data);
        header("Location:".$url_backoffice."autor");
        exit();
    }
?>

<main class="caixa">
    <?php if(!$form):?>
        <h2 class="fontet1">Imagem do autor</h2>
        <img src="<?=getImagemAutor();?>" alt="imgautor">
        <br><br><hr>
        <h2 class="fontet1">Texto do autor</h2>
        <p class="fontep"><?=getTextoAutor();?></p>
        <hr><br>
        <p class="fontep">Última atualização: <?=getDataAtualizacaoAutor();?></p>
        <form method="POST">
            <input type="submit" name="editar" class="fontep" value="Editar">
        </form> 
        <br><br>
    <?php else:?>
            <h2 class="fontet1">Editar (Autor)</h2>
            <form method="POST">
                <h2 class="fontet1">Link da imagem do autor:</h2>
                <input type="text" class="largo" name="imagem_autor" value="<?=getImagemAutor();?>" required="required">
                <br><br>
                <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank" class="fontep">Pesquisar imagens</a>
                <br><br>
                <h2 class="fontet1">Texto do autor:</h2>
                <textarea id="editor" class="largo" rows="10" name="texto_autor" required="required"><?=getTextoAutor();?></textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
                <br><br>
                <input type="submit" value= "Editar" class="fontep">
            </form>
    <?php endif;?>
</main>