<main class="container-fluid p-0">
    <!-- Área Titulo -->
    <div class="row m-0">
        <div class="col p-0 caixatitulo sombra" id="target_pagina">
            <div class="col fontemenus fonteactivodouradob4" id="titulocaixat">Livros</div>
            <div class="col fontet1modificada" id="textocaixat"><?=getTituloLivro($rotas[1]);?></div>
        </div>
    </div>
    <!-- Área Livro -->
    <div class="row m-0 arealivro">
        <div class="col p-0 d-none d-lg-block caixalivro">
            <span class="fontep">
                <img src="<?=getImagemLivro($rotas[1]);?>" alt="livro" class="float-start imglivro">
                <?=getTextoLivro($rotas[1]);?> 
            </span>
        </div>
        <div class="col p-0 d-block d-lg-none caixalivro">
            <div class="col-12 text-center p-0">
                <img src="<?=getImagemLivro($rotas[1]);?>" alt="livro" class="imglivro">
            </div>
            <div class="col-12 p-0 m-0">
                <span class="fontep">
                    <?=getTextoLivro($rotas[1]);?>  
                </span>
            </div>
        </div>
    </div>  
    <div class="row m-0">
        <div class="col p-0 caixalivro text-end d-none d-lg-block"> 
            <img id="voltar" onclick="voltarPagina()" src="<?= $url_public; ?>Imagens/voltar1.svg" alt="voltar" class="botaovoltar02" onmouseenter="mudarSrc('voltar', '<?= $url_public; ?>Imagens/voltar2.svg')" onmouseleave="mudarSrc('voltar', '<?= $url_public; ?>Imagens/voltar1.svg')">
        </div>
    </div>
</main>