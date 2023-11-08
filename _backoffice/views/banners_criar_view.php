<?php 
    $form = isset($_POST["imagem_banner_dt"]) && isset($_POST["imagem_banner_mb"]) && isset($_POST["titulo_banner"]) && isset($_POST["subtitulo_banner"]) && isset($_POST["link_banner"]);

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
        $link = $_POST["link_banner"];
        $login = $_SESSION["utilizador"]["login"];
        $data = setDataAtualizacao() . " - " . getUserAtualizacao($login)["nome"];
        criarBanner($img_dt, $img_mb, $categoria, $titulo, $subtitulo, $link, $data);
        header("Location:".$url_backoffice."banners");
        exit();
    }
?>

<main class="caixa">
    <h2 class="fontet1">Criar Novo Banner</h2>
    <form method="POST">
        <h2 class="fontet1">Link da imagem do banner desktop:</h2>
        <input type="text" class="largo" name="imagem_banner_dt" placeholder="Imagem Desktop" required="required">
        <br><br>
        <h2 class="fontet1">Link da imagem do banner mobile:</h2>
        <input type="text" class="largo" name="imagem_banner_mb" placeholder="Imagem Mobile" required="required">
        <br><br>
        <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank" class="fontep">Pesquisar imagens</a>
        <br><br>
        <h2 class="fontet1">Categoria do banner:</h2>
        <input type="text" class="largo" placeholder="Categoria" name="categoria_banner">
        <br><br>
        <h2 class="fontet1">Titulo do banner:</h2>
        <input type="text" class="largo" name="titulo_banner" placeholder="Titulo" required="required">
        <br><br>
        <h2 class="fontet1">Subtitulo do livro:</h2>
        <textarea id="editor" name="subtitulo_banner" rows="10" placeholder="Subtitulo"></textarea>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
        <br><br>
        <h2 class="fontet1">Link botão "Saber mais" do banner:</h2>
        <input type="text" class="largo" name="link_banner" placeholder="Link Saber Mais" required="required">
        <br><br>
        <input type="submit" value="Criar Novo" class="fontep">
    </form>
</main>