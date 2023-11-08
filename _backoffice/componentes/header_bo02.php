<?php redirecionarLogin($url_backoffice); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice - Sebastião Alves</title>
    <!-- Links CSS -->
    <link rel="stylesheet" href="<?= $url_public; ?>CSS/estilobackoffice.css">
    <link rel="stylesheet" href="<?= $url_public; ?>CSS/atribuicaofontes.css">
    <link rel="stylesheet" href="<?= $url_public; ?>CSS/Fontes/fontes.css">
    <!-- CK Editor - Editor de texto -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
</head>

<body>

    <header>
        <br>
        <h1 class="fontet1">Backoffice (<?= $rotas[1]; ?>)</h1>
        <br>
        <nav>
            <a href="<?= $url_backoffice; ?>inicio" class="fontemenus">Início</a>
            <a href="<?= $url_backoffice; ?>banners" class="fontemenus">Banners</a>
            <a href="<?= $url_backoffice; ?>home" class="fontemenus">Home</a>
            <a href="<?= $url_backoffice; ?>autor" class="fontemenus">Autor</a>
            <a href="<?= $url_backoffice; ?>livros" class="fontemenus">Livros</a>
            <a href="<?= $url_backoffice; ?>destaques" class="fontemenus">Destaques</a>
            <a href="<?= $url_backoffice; ?>imprensa" class="fontemenus">Imprensa</a>
            <a href="<?= $url_backoffice; ?>contactos" class="fontemenus">Contactos</a>
            <a href="<?= $url_backoffice; ?>redes" class="fontemenus">Redes</a>
            <a href="<?= $url_backoffice; ?>configuracoes" class="fontemenus">Configurações</a>
            <a href="<?= $url_backoffice; ?>sair" class="fontemenus">Sair</a>
        </nav>
    </header>