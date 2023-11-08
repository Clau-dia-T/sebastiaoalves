<?php
    $id = $rotas["3"];
    $form = isset($_POST["imagem_livro"]) && isset($_POST["titulo_livro"]) && isset($_POST["texto_livro"]);

    if($form){
        $img_l = $_POST["imagem_livro"];
        $titulo = $_POST["titulo_livro"];
        $texto = $_POST["texto_livro"];
        $login = $_SESSION["utilizador"]["login"];
        $data = setDataAtualizacao() . " - " . getUserAtualizacao($login)["nome"];
        editarLivro($id, $img_l, $titulo, $texto, $data);
        header("Location:".$url_backoffice."livros");
        exit();
    }
?>

<main class="caixa">
    <h2 class="fontet1">Editar (Livro)</h2>
    <form method="POST">
        <h2 class="fontet1">Link da imagem capa do livro:</h2>
        <input type="text" class="largo" name="imagem_livro" value="<?= getImagemLivro($id); ?>" required="required">
        <br><br>
        <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank" class="fontep">Pesquisar imagens</a>
        <br><br>
        <h2 class="fontet1">Titulo do livro:</h2>
        <input type="text" class="largo" name="titulo_livro" value="<?= getTituloLivro($id); ?>" required="required">
        <br><br>
        <h2 class="fontet1">Texto do livro:</h2>
        <textarea id="editor" name="texto_livro" rows="10" required="required"><?= getTextoLivro($id); ?></textarea>
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