<?php
    $id = $rotas["3"];
    $form = isset($_POST["imagem_banner_dt"]) && isset($_POST["imagem_banner_mb"]) && isset($_POST["titulo_banner"]) && isset($_POST["subtitulo_banner"]);

    if($form){
        if(isset($_POST["categoria_banner"])){
            $categoria = $_POST["categoria_banner"];
        }
        else{
            $categoria = "";
        }
        $img_dt = $_POST["imagem_banner_dt"];
        $img_mb = $_POST["imagem_banner_mb"];
        $titulo = $_POST["titulo_banner"];
        $subtitulo = $_POST["subtitulo_banner"];
        $login = $_SESSION["utilizador"]["login"];
        $data = setDataAtualizacao() . " - " . getUserAtualizacao($login)["nome"];
        editarBanner($id, $img_dt, $img_mb, $categoria, $titulo, $subtitulo, $data);
        header("Location:".$url_backoffice."banners");
        exit();
    }
?>

<main class="caixa">
    <h2 class="fontet1">Editar (Banner)</h2>
    <form method="POST">
        <h2 class="fontet1">Link da imagem banner desktop:</h2>
        <input type="text" class="largo" name="imagem_banner_dt" value="<?= getImagemBannerDesktop($id); ?>" required="required">
        <br><br>
        <h2 class="fontet1">Link da imagem banner mobile:</h2>
        <input type="text" class="largo" name="imagem_banner_mb" value="<?= getImagemBannerMobile($id); ?>" required="required">
        <br><br>
        <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank" class="fontep">Pesquisar imagens</a>
        <br><br>
        <h2 class="fontet1">Categoria do banner:</h2>
        <input type="text" class="largo" name="categoria_banner" value="<?= getCategoriaBanner($id); ?>">
        <br><br>
        <h2 class="fontet1">Titulo do banner:</h2>
        <input type="text" class="largo" name="titulo_banner" value="<?= getTituloBanner($id); ?>" required="required">
        <br><br>
        <h2 class="fontet1">Subtitulo do banner:</h2>
        <textarea id="editor" name="subtitulo_banner" rows="10" required="required"><?= getSubtituloBanner($id); ?></textarea>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
        <br><br>
        <input type="submit" value= "Editar">
    </form>
</main>