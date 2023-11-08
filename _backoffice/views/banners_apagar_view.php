<?php 
    $id = $rotas["3"];
    if(isset($_POST["resposta"])){
        apagarBanner($id);
        header("Location: ".$url_backoffice."banners");
        exit();
    }
?>

<main class="caixa">
    <table>
        <tr>
            <th class="fontemenus">Imagem Desktop</th>
            <th class="fontemenus">Imagem Mobile</th>
            <th class="fontemenus">Categoria</th>
            <th class="fontemenus">Titulo</th>
            <th class="fontemenus">Subtitulo</th>
            <th class="fontemenus">Link Saber Mais</th>
            <th class="fontemenus">Ações</th>
        </tr>
        <tr>
            <td><img src="<?= getImagemBannerDesktop($id); ?>" alt="img_dt"></td>
            <td><img src="<?= getImagemBannerMobile($id); ?>" alt="img_mb"></td>
            <td class="fontep"><?= getCategoriaBanner($id); ?></td>
            <td class="fontep"><?= getTituloBanner($id); ?></td>
            <td class="fontep"><?= substr(getSubtituloBanner($id), 0, 50); ?>...</td>
            <td class="fontep"><?= substr(getLinkSabermais($id), 0, 50); ?>...</td>
        </tr>
    </table>
    <hr>
    <h2 class="fontet1">Tem a certeza que deseja apagar este banner?</h2>
    <br>
    <form method="POST">
        <button class="sim botao" name="resposta" value="true">Sim</button>
        <a href="<?=$url_backoffice;?>banners/" class="nao fontep">
            <button type="button" class="fontep botao">Não</button> 
        </a> 
    </form>
    <br><br>
</main>