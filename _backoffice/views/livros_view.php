<?php $resultados = getListaLivrosFull(); ?>

<main class="caixa">
    <table>
        <tr>
            <th class="fontemenus">Imagem</th>
            <th class="fontemenus">Titulo</th>
            <th class="fontemenus">Texto</th>
            <th class="fontemenus">Última atualização</th>
            <th class="fontemenus">Ações</th>
        </tr>
        <?php foreach($resultados as $r): ?>
            <tr>
                <td><img src="<?= $r["imagem_livro"]; ?>" alt="img_l"></td>
                <td class="fontep"><?= $r["titulo_livro"]; ?></td>
                <td class="fontep"><?= substr($r["texto_livro"], 0, 200); ?>...</td>
                <td class="fontep"><?= $r["data_atualizacao"]; ?></td>
                <td>
                    <a href="<?=$url_backoffice;?>livros/editar/<?=$r['id'];?>" class="fontep">Editar</a>
                    <br><br>
                    <a href="<?=$url_backoffice;?>livros/apagar/<?=$r['id'];?>" class="fontep">Apagar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <hr>
    <br>
    <a href="<?=$url_backoffice;?>livros/criar" class="fontep">Criar Novo</a> 
    <br><br>
</main>