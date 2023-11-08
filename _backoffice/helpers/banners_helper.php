<?php

function getListaBannersFull(){
    $resultados = selectSQL("SELECT * FROM banners");
    return $resultados;
}

function editarBanner($id, $img_dt, $img_mb, $categoria, $titulo, $subtitulo, $data){
    iduSQL("UPDATE banners SET imagem_banner_dt = '$img_dt', imagem_banner_mb = '$img_mb', categoria_banner = '$categoria', titulo_banner = '$titulo', subtitulo_banner = '$subtitulo', data_atualizacao = '$data' WHERE id='$id'");
}

function criarBanner($img_dt, $img_mb, $categoria, $titulo, $subtitulo, $link, $data){
    iduSQL("INSERT INTO banners (imagem_banner_dt, imagem_banner_mb, categoria_banner, titulo_banner, subtitulo_banner, link_sabermais, data_atualizacao) VALUES ('$img_dt', '$img_mb', '$categoria', '$titulo', '$subtitulo', '$link', '$data')");
}

function apagarBanner($id){
    iduSQL("DELETE FROM banners WHERE id='$id'");
}

?>