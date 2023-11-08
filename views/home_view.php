<?php $lista_destaques = getListaDestaques(); ?>

<main class="container-fluid p-0">
    <!-- Área Bem-vindo -->
    <div class="row m-0">
        <div class="col p-0 caixahome sombra">
            <div class="row m-0">
                <div class="col-12 col-lg-2 p-0 text-center">
                    <img id="imgbemvindo" class="sombra02" src="<?=getImagemAutorHome();?>" alt="imgbemvindo">
                </div>
                <div class="col-12 col-lg-10 p-0">
                    <h1 class="p-0 fontet1" id="titulohome">
                        Bem-Vindo ao Meu Website
                    </h1>
                    <div class="fontep" id="textohome">
                        <?=substr(getTextoAutor(), 0, 1300);?>
                    </div>
                    <div class="linhasabermais">
                        <a href="<?= $url_base; ?>autor"><img id="sabermais02" src="<?= $url_public; ?>Imagens/sabermais1.svg" onmouseenter="mudarSrc('sabermais02', '<?= $url_public; ?>Imagens/sabermais2.svg')" onmouseleave="mudarSrc('sabermais02', '<?= $url_public; ?>Imagens/sabermais1.svg')" alt="sabermais"></a>
                    </div>
                </div>
            </div>         
        </div>
    </div>

    <!-- Área últimos Livros -->
    <div class="row caixaul">
        <div class="col-12 p-0">
            <h1 class="fontet1 tituloul">Últimos livros</h1>
            <div class="fontep textocaixaul">
                <?=getTextoUlHome();?>
            </div>
        </div>
    </div>

    <!-- Destaques -->
    <div class="row p-0 cards">
        <?php foreach($lista_destaques as $d): ?>
            <div class="col-4 card sombra03" style="width: 18rem;">
                <img class="card-img-top" src="<?= $d['imagem_destaque'];?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title fontedestaqueshometitulo"><?= $d['titulo_destaque'];?></h5>
                    <h6 class="fontecategoria categoriadestaque"><?= $d['categoria_destaque'];?></h6>
                    <div class="card-text fontep">
                        <?= substr($d['texto_destaque'], 0, 200);?>...
                    </div>
                    <a href="<?= $d['link_destaque'];?>"><img id="sm<?= $d['id']; ?>" class="sabermais03" src="<?= $url_public; ?>Imagens/sabermais1.svg" onmouseenter="mudarSrc('sm<?= $d['id']; ?>', '<?= $url_public; ?>Imagens/sabermais2.svg')" onmouseleave="mudarSrc('sm<?= $d['id']; ?>', '<?= $url_public; ?>Imagens/sabermais1.svg')" alt="sabermais"></a>      
                </div>
            </div>   
        <?php endforeach; ?>
    </div>
</main>