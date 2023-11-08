<?php
    $lista_livros = getListaLivros();
    $id_01 = $rotas["3"];
    $form = isset($_POST["editar"]);

    if($form){
        $form_02 = isset($_POST["livro"]);
        if($form_02){
            $id_02 = $_POST["livro"];
            $imagem = getImagemLivro($id_02);
            $titulo = getTituloLivro($id_02);
            $categoria = $_POST["categoria_destaque"];
            $texto = getTextoLivro($id_02);
            $link = $url_base."livros/".$id_02;
            $login = $_SESSION["utilizador"]["login"];
            $data = setDataAtualizacao() . " - " . getUserAtualizacao($login)["nome"];
            atualizarDestaque($id_01, $imagem, $titulo, $categoria, $texto, $link, $data);
            header("Location:".$url_backoffice."destaques");
            exit();
        }
    }
?>

<main class="caixa">
    <h2 class="fontet1">Editar (Destaques)</h2>
    <form method="POST">
        <h2 class="fontet1">Livro do destaque:</h2>
        <select name="livro">
            <?php foreach($lista_livros as $l): ?>
                <option value="<?= $l['id'];?>" <?= ($l['titulo_livro'] == getTituloDestaque($id_01)) ? "selected" : "" ;?> ><?= $l['titulo_livro'];?></option>       
            <?php endforeach; ?>
        </select>
        <br><br>
        <h2 class="fontet1">Observação do destaque:</h2>
        <input type="text" class="largo" name="categoria_destaque" value="<?=getCategoriaDestaque($id_01);?>" required="required">
        <br><br>
        <input type="submit" name="editar" value="Editar" class="fontep">
    </form>
</main>