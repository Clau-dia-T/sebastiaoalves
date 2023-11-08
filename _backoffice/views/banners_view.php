<?php $resultados = getListaBannersFull(); ?>

<main class="caixa">
    <table>
        <tr>
            <th class="fontemenus">Imagem Desktop</th>
            <th class="fontemenus">Imagem Mobile</th>
            <th class="fontemenus">Categoria</th>
            <th class="fontemenus">Titulo</th>
            <th class="fontemenus">Subtitulo</th>
            <th class="fontemenus">Link Saber Mais</th>
            <th class="fontemenus">Última atualização</th>
            <th class="fontemenus">Ações</th>
        </tr>
        <?php foreach($resultados as $r): ?>
            <tr>
                <td><img src="<?= $r["imagem_banner_dt"]; ?>" alt="img_dt"></td>
                <td><img src="<?= $r["imagem_banner_mb"]; ?>" alt="img_mb"></td>
                <td class="fontep"><?= $r["categoria_banner"]; ?></td>
                <td class="fontep"><?= $r["titulo_banner"]; ?></td>
                <td class="fontep"><?= substr($r["subtitulo_banner"], 0, 50); ?>...</td>
                <td class="fontep"><?= substr($r["link_sabermais"], 0, 50); ?>...</td>
                <td class="fontep"><?= $r["data_atualizacao"]; ?></td>
                <td>
                    <a href="<?=$url_backoffice;?>banners/editar/<?=$r['id'];?>" class="fontep">Editar</a>
                    <br><br>
                    <a href="<?=$url_backoffice;?>banners/apagar/<?=$r['id'];?>" class="fontep">Apagar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <hr>
    <br>
    <a href="<?=$url_backoffice;?>banners/criar" class="fontep">Criar Novo</a> 
    <br><br>
</main>