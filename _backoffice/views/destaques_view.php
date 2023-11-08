<?php $resultados = getListaDestaquesFull(); ?>

<main class="caixa">
    <table>
        <tr>
            <th class="fontemenus">Imagem</th>
            <th class="fontemenus">Titulo</th>
            <th class="fontemenus">Categoria</th>
            <th class="fontemenus">Última atualização</th>
            <th class="fontemenus">Ações</th>
        </tr>
        <?php foreach($resultados as $r): ?>
            <tr>
                <td><img src="<?= $r["imagem_destaque"]; ?>" alt="img_destaque"></td>
                <td class="fontep"><?= $r["titulo_destaque"]; ?></td>
                <td class="fontep"><?= $r["categoria_destaque"]; ?></td>
                <td class="fontep"><?= $r["data_atualizacao"]; ?></td>
                <td>
                    <a href="<?=$url_backoffice;?>destaques/editar/<?=$r['id'];?>" class="fontep">Editar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br><br>
</main>