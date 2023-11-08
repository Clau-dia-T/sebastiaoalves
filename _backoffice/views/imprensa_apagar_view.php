<?php 
    $id = $rotas["3"];
    if(isset($_POST["resposta"])){
        apagarImprensa($id);
        header("Location: ".$url_backoffice."imprensa");
        exit();
    }
?>

<main class="caixa">
    <table>
        <tr>
            <th class="fontemenus">Imagem</th>
            <th class="fontemenus">Titulo</th>
            <th class="fontemenus">Texto</th>
            <th class="fontemenus">Data Publicação</th>
        </tr>

        <tr>
            <td><img src="<?= getImagemImprensa($id); ?>" alt="img_l"></td>
            <td class="fontep"><?= getTituloImprensa($id); ?></td>
            <td class="fontep"><?= substr(getTextoImprensa($id), 0, 200); ?>...</td>
            <td class="fontep"><?= getDataPubImprensa($id); ?></td>
        </tr>
        
    </table>
    <hr>
    <h2 class="fontet1">Tem a certeza que deseja apagar esta imprensa?</h2>
    <br>
    <form method="POST">
        <button class="sim botao" name="resposta" value="true">Sim</button>
        <a href="<?=$url_backoffice;?>imprensa/" class="nao" class="fontep">
            <button type="button" class="fontep botao">Não</button> 
        </a> 
    </form>
    <br><br>
</main>