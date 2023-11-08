<main class="container-fluid p-0">
    <!-- Área Titulo -->
    <div class="row m-0">
        <div class="col p-0 caixatitulo sombra" id="target_pagina">
            <div class="col fontemenus fonteactivodouradob4" id="titulocaixat">Contactos</div>
            <div class="col fontet1modificada" id="textocaixat">Pode Contactar-me Através do E-mail ou Telefone</div>
        </div>
    </div>

    <!-- Contactos -->
    <div class="row m-0 caixacont">
        <div class="col p-0">
            <div class="row m-0 justify-content-center">
                <div class="col-12 col-lg-2 p-0 cont">
                    <h6 class="fontecontactostitulo titulocontactos">Telefone</h6>
                    <p class="fontecontactosconteudo conteudocontactos"><?=getTelefone();?></p>
                </div>
                <div class="col-12 col-lg-3 p-0 cont">
                    <h6 class="fontecontactostitulo titulocontactos">Morada</h6>
                    <p class="fontecontactosconteudo conteudocontactos"><?=getMorada();?></p>
                </div>
                
                <div class="col-12 col-lg-2 p-0 cont">
                    <h6 class="fontecontactostitulo titulocontactos">Email</h6>
                    <p class="fontecontactosconteudo conteudocontactos"><?=getEmail();?></p>
                </div>
            </div>

            <!-- Separador -->
            <div class="row m-0">
                <div class="col p-0">
                    <hr class="separadorcont01">
                </div>
            </div>

            <!-- Horário -->
            <div class="row m-0">
                <div class="col">
                    <h6 class="fontecontactostitulo titulocontactos">Horário</h6>
                    <p class="fontecontactosconteudo conteudocontactos"><?=getHorario();?></p>
                </div>
            </div>
        </div>
    </div>
</main>