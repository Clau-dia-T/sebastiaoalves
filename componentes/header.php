<?php
    $lista_livros = getListaLivros();
    $lista_banners = getListaBanners();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastião Alves</title>
    <!-- Links Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Links CSS -->
    <link rel="stylesheet" href="<?= $url_public; ?>CSS/atribuicaofontes.css">
    <link rel="stylesheet" href="<?= $url_public; ?>CSS/Fontes/fontes.css">
    <link rel="stylesheet" href="<?= $url_public; ?>CSS/estilo.css">
    <link rel="stylesheet" href="<?= $url_public; ?>CSS/estilomediaquery.css">
</head>

<body>
    <header class="container-fluid">
        <div class="row limitador">
            <div class="col p-0">
                <div class="row">
                    <div class="col p-0">
                        <!-- Carrosel --> 
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators m-0">
                                <?php for($i=0; $i<count($lista_banners); $i++): ?>                                                            
                                    <?php if($i == 0): ?>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$i;?>" class="active" aria-current="true" aria-label="Slide <?=($i+1);?>"></button>
                                    <?php else: ?>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$i;?>" aria-label="Slide <?=($i+1);?>"></button>
                                    <?php endif; ?>                                                                                              
                                <?php endfor; ?>
                            </div>
                            <div class="carousel-inner">
                                <?php foreach($lista_banners as $index=>$b): ?> 
                                    <?php if($index == 0): ?>
                                        <div class="carousel-item active">
                                    <?php else: ?>
                                        <div class="carousel-item">
                                    <?php endif; ?>
                                            <img src="<?=getImagemBannerDesktop($b['id']);?>" class="d-none d-md-block w-100" alt="imagem_d">
                                            <img src="<?=getImagemBannerMobile($b['id']);?>" class="d-block d-md-none w-100" alt="imagem_m">
                                            <div class="carousel-caption">
                                                <?php if(!empty(getCategoriaBanner($b['id']))): ?>
                                                    <div class="col-12 col-md-6 fontecategoria novidade"><?=getCategoriaBanner($b['id']);?></div>
                                                <?php endif; ?>
                                                <div class="col-12 col-md-6 fontebannercabecalhotitulo titulobanner"><?=getTituloBanner($b['id']);?></div>
                                                <div class="col-12 col-md-7 fontebannercabecalhotexto textobannernovidade">
                                                    <?=substr(getSubtituloBanner($b['id']), 0, 340);?>
                                                </div>
                                                <div class="col-6 p-0 sabermais01">
                                                    <a href="<?=getLinkSabermais($b['id']);?>"><img id="<?= $index; ?>" src="<?= $url_public; ?>Imagens/sabermais1.svg" alt="sabermais" onmouseenter="mudarSrc('<?= $index; ?>', '<?= $url_public; ?>Imagens/sabermais2.svg')" onmouseleave="mudarSrc('<?= $index; ?>', '<?= $url_public; ?>Imagens/sabermais1.svg')"></a>
                                                </div>
                                            </div>
                                        </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                

                <!-- Titulo -->
                <div class="row justify-content-center" id="tituloheader">
                    <div class=" col-12 col-lg-4 p-0 fontetitulo text-center">
                        Sebastião Alves
                    </div>
                </div>

                <!-- Separador -->
                <div class="row justify-content-center" id="separadortopo">
                    <div class="col p-0">
                        <hr class="separador">
                    </div>
                </div>

                <!--Navbar-->
                <div class="row" id="rownav">
                    <div class="col p-0">
                        <nav class="navbar navbar-expand-sm fontemenus p-0">
                            <div class="container justify-content-center p-0">
                                <button id="togglernav" onclick="toggleNav()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                </button>
                                <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
                                    <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link fontemenus p-0 <?= ($rotas[0] == "home" || $rotas[0] == "") ? "active": ""; ?>" aria-current="page" href="<?= $url_base; ?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fontemenus p-0 <?= ($rotas[0] == "autor") ? "active": ""; ?>" href="<?= $url_base; ?>autor">Autor</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a id="abrir" class="nav-link fontemenus p-0 <?= ($rotas[0] == "livros") ? "active": ""; ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Livros
                                        </a>
                                        <ul class="dropdown-menu p-0 sombra" aria-labelledby="navbarDropdown" data-bs-spy="scroll" data-bs-target="#navdropdown">
                                            <?php foreach($lista_livros as $l): ?>
                                                <li><a class="dropdown-item p-0 fontesubmenus" href="<?= $url_base; ?>livros/<?= $l['id'];?>"><?= $l['titulo_livro'];?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fontemenus p-0 <?= ($rotas[0] == "imprensa") ? "active": ""; ?>" href="<?= $url_base; ?>imprensa">Imprensa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fontemenus p-0 <?= ($rotas[0] == "contactos") ? "active": ""; ?>" href="<?= $url_base; ?>contactos">Contactos</a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>