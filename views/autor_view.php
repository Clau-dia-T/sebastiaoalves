<main class="container-fluid p-0">
    <!-- Área Titulo -->
    <div class="row m-0">
        <div class="col p-0 caixatitulo sombra" id="target_pagina">
            <div class="col fontemenus fonteactivodouradob4" id="titulocaixat">Autor</div>
            <div class="col fontet1modificada" id="textocaixat">Sobre Mim</div>
        </div>
    </div>

    <!-- Área Texto -->
    <div class="row m-0">
        <div class="col-12 p-0 imgconteudo">
            <img src="<?=getImagemAutor();?>" alt="conteudo">
        </div>
        <div class="col-12 d-none d-lg-block textoconteudo">
            <span class="fontep">
                <?=getTextoAutor();?>
            </span>
        </div>
        <div class="col-12 textoconteudo d-lg-none">
            <div class="fontep">
                <?=substr(getTextoAutor(), 0, 1300);?>
                <span class="d-none" id="maistexto">
                    <?=substr(getTextoAutor(), 1300);?>
                </span>
            </div>
        </div>
        <div class="col p-0 m-0 linksconteudo">
            <img id="vermais" src="<?= $url_public; ?>Imagens/vermais.svg" alt="vermais" class="d-lg-none vermais" onmouseenter="mudarSrc('vermais', '<?= $url_public; ?>Imagens/vermais-cinza.svg')" onmouseleave="mudarSrc('vermais', '<?= $url_public; ?>Imagens/vermais.svg')" onclick="verMais()">
            <br>
            <img id="voltar" src="<?= $url_public; ?>Imagens/voltar1.svg" alt="voltar" class="botaovoltar" onclick="voltarPagina()" onmouseenter="mudarSrc('voltar', '<?= $url_public; ?>Imagens/voltar2.svg')" onmouseleave="mudarSrc('voltar', '<?= $url_public; ?>Imagens/voltar1.svg')">
        </div>
    </div>
</main>