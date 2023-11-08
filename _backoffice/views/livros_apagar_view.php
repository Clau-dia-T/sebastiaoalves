<?php 
    $id = $rotas["3"];
    if(isset($_POST["resposta"])){
        apagarLivro($id);
        header("Location: ".$url_backoffice."livros");
        exit();
    }
?>

<main class="caixa">
    <table>
        <tr>
            <th class="fontemenus">Imagem</th>
            <th class="fontemenus">Titulo</th>
            <th class="fontemenus">Texto</th>
        </tr>
        <tr>
            <td><img src="<?= getImagemLivro($id); ?>" alt="img_l"></td>
            <td class="fontep"><?= getTituloLivro($id); ?></td>
            <td class="fontep"><?= substr(getTextoLivro($id), 0, 200); ?>...</td>
        </tr>
    </table>
    <hr>
    <h2 class="fontet1">Tem a certeza que deseja apagar este livro?</h2>
    <br>
    <form method="POST">
        <button class="sim botao" name="resposta" value="true">Sim</button>
        <a href="<?=$url_backoffice;?>livros/" class="nao fontep">
            <button type="button" class="fontep botao">Não</button> 
        </a> 
    </form>
    <br><br>
</main>