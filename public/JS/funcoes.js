function mudarSrc(id, src){
    let sabermais = document.getElementById(id);
    sabermais.src = src;
}

function verMais(){
    let maistexto = document.getElementById("maistexto");
    let vermais = document.getElementById("vermais");
    maistexto.classList.remove("d-none");
    vermais.classList.add("d-none");
}

function toggleNav(){
    let togglernav = document.getElementById("togglernav");
    if(!aberto){
        aberto = true;
        togglernav.style.backgroundImage = "url('http://localhost/sebastiao_alves/public/Imagens/fechar.svg')";
    }
    else{
        aberto = false;
        togglernav.style.backgroundImage = "url('http://localhost/sebastiao_alves/public/Imagens/menu.svg')";
    }
}

function voltarPagina(){
    history.back();
}

function moverPagina(){
    let target_pagina = document.getElementById("target_pagina");
    target_pagina.scrollIntoView();
}

function abrirDropdown(){
    setTimeout(dropdown, 500);
}

function dropdown(){
    abrir.click();
}