<?php
    $id = $rotas["3"];
    $form = isset($_POST["titulo_imp"]) && isset($_POST["data_imp"]) && (isset($_POST["imagem_imp"]) || isset($_POST["texto_imp"]));

    if($form){
        $titulo = $_POST["titulo_imp"];
        $data = $_POST["data_imp"];
        if(isset($_POST["imagem_imp"])){
            $imagem = $_POST["imagem_imp"];
        }
        else{
            $imagem = ""; 
        }
        if(isset($_POST["texto_imp"])){
            $texto = $_POST["texto_imp"];
        }
        else{
            $texto = ""; 
        }
        $login = $_SESSION["utilizador"]["login"];
        $data_atualizacao = setDataAtualizacao() . " - " . getUserAtualizacao($login)["nome"];
        editarImprensa($id, $imagem, $titulo, $texto, $data, $data_atualizacao);
        header("Location:".$url_backoffice."imprensa");
        exit();
    }
?>

<main class="caixa">
    <h2 class="fontet1">Editar (Imprensa)</h2>
    <form method="POST">
        <h2 class="fontet1">Link da imagem:</h2>
        <input type="text" class="largo" name="imagem_imp" value="<?= getImagemImprensa($id); ?>">
        <br><br>
        <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank" class="fontep">Pesquisar imagens</a>
        <br><br>
        <h2 class="fontet1">Titulo da imprensa:</h2>
        <input type="text" class="largo" name="titulo_imp" value="<?= getTituloImprensa($id); ?>" required="required">
        <br><br>
        <h2 class="fontet1">Texto da imprensa:</h2>
        <textarea id="editor" name="texto_imp" rows="10"><?= getTextoImprensa($id); ?></textarea>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
        <br><br>
        <h2 class="fontet1">Data de publicação da imprensa:</h2>
        <input type="text" class="largo" name="data_imp" value="<?= getDataPubImprensa($id); ?>" required="required">
        <br><br>
        <input type="submit" value= "Editar" class="fontep">
    </form>
</main>