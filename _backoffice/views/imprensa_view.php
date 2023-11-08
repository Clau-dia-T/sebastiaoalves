<?php $resultados = getListaImprensaFull(); ?>

<main class="caixa">
    <table>
        <tr>
            <th class="fontemenus">Imagem</th>
            <th class="fontemenus">Titulo</th>
            <th class="fontemenus">Texto</th>
            <th class="fontemenus">Data Publicação</th>
            <th class="fontemenus">Última atualização</th>
            <th class="fontemenus">Ações</th>
        </tr>
        <?php foreach($resultados as $r): ?>
            <tr>
                <td><img src="<?= $r["imagem_imprensa"]; ?>" alt="img_i"></td>
                <td class="fontep"><?= $r["titulo_imprensa"]; ?></td>
                <td class="fontep">
                    <?= substr($r["texto_imprensa"], 0, 200); ?>
                    <?php if(!empty($r["texto_imprensa"])):?>
                        ...
                    <?php endif;?>
                </td>
                <td class="fontep"><?= $r["data_publicacao_imprensa"]; ?></td>
                <td class="fontep"><?= $r["data_atualizacao"]; ?></td>
                <td>
                    <a href="<?=$url_backoffice;?>imprensa/editar/<?=$r['id'];?>" class="fontep">Editar</a>
                    <br><br>
                    <a href="<?=$url_backoffice;?>imprensa/apagar/<?=$r['id'];?>" class="fontep">Apagar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <hr>
    <br>
    <a href="<?=$url_backoffice;?>imprensa/criar" class="fontep">Criar Novo</a> 
    <br><br>
</main>