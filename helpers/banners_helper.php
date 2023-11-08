<?php
    function getListaBanners(){
        $resultado = selectSQL("SELECT * FROM banners");
        return $resultado;
    }

    function getImagemBannerDesktop($id){
        $resultado = selectSQLUnico("SELECT imagem_banner_dt FROM banners WHERE id='$id'");
        return $resultado["imagem_banner_dt"];
    }

    function getImagemBannerMobile($id){
        $resultado = selectSQLUnico("SELECT imagem_banner_mb FROM banners WHERE id='$id'");
        return $resultado["imagem_banner_mb"];
    }

    function getCategoriaBanner($id){
        $resultado = selectSQLUnico("SELECT categoria_banner FROM banners WHERE id='$id'");
        return $resultado["categoria_banner"];
    }

    function getTituloBanner($id){
        $resultado = selectSQLUnico("SELECT titulo_banner FROM banners WHERE id='$id'");
        return $resultado["titulo_banner"];
    }

    function getSubtituloBanner($id){
        $resultado = selectSQLUnico("SELECT subtitulo_banner FROM banners WHERE id='$id'");
        return $resultado["subtitulo_banner"];
    }

    function getLinkSabermais($id){
        $resultado = selectSQLUnico("SELECT link_sabermais FROM banners WHERE id='$id'");
        return $resultado["link_sabermais"];
    }
?>