<footer class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">

                <!-- Separador -->
                <div class="row justify-content-center separadorfundo" id="sf1">
                    <div class="col p-0">
                        <hr class="separador02">
                    </div>
                </div>
                
                <!--Navbar-->
                <div class="row d-none d-md-block" id="rownavbottom">
                    <div class="col p-0">
                        <nav class="navbar navbar-expand fontemenubarrarodape p-0">
                            <div class="container justify-content-center p-0">
                                <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link fontemenubarrarodape p-0 <?= ($rotas[0] == "home" || $rotas[0] == "") ? "active": ""; ?>" aria-current="page" href="<?= $url_base; ?>">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fontemenubarrarodape p-0 <?= ($rotas[0] == "autor") ? "active": ""; ?>" href="<?= $url_base; ?>autor">Autor</a>
                                        </li>
                                        <li class="nav-item">
                                            <a onclick="abrirDropdown()" class="nav-link fontemenubarrarodape p-0 <?= ($rotas[0] == "livros") ? "active": ""; ?>" href="#">Livros</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fontemenubarrarodape p-0 <?= ($rotas[0] == "imprensa") ? "active": ""; ?>" href="<?= $url_base; ?>imprensa">Imprensa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link fontemenubarrarodape p-0 <?= ($rotas[0] == "contactos") ? "active": ""; ?>" href="<?= $url_base; ?>contactos">Contactos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

                <!-- Separador -->
                <div class="row d-none d-md-block justify-content-center separadorfundo" id="sf2">
                    <div class="col p-0">
                        <hr class="separador02">
                    </div>
                </div>

                <!--Contactos e Redes Sociais-->
                
                <div class="row caixacontactos">
                    <!--Direita-->
                    <div class="col-12 col-md-7 p-0 direita">
                        <h5 class="fontecontactos">Contactos</h5>
                        <div class="row p-0 m-0">
                            <div class="col-12 col-md-5 p-0">
                                <h6 class="fontecontactostitulo titulocontactos">Morada</h6>
                                <p class="fontecontactosconteudo conteudocontactos"><?=getMorada();?></p>
                            </div>
                            <div class="col-12 col-md-3 p-0">
                                <h6 class="fontecontactostitulo titulocontactos">Telefone</h6>
                                <p class="fontecontactosconteudo conteudocontactos"><?=getTelefone();?></p>
                            </div>
                            <div class="col-12 col-md-3 p-0">
                                <h6 class="fontecontactostitulo titulocontactos">Email</h6>
                                <p class="fontecontactosconteudo conteudocontactos"><?=getEmail();?></p>
                            </div>
                        </div>
                    </div>
                    <!--Esquerda-->
                    <div class="col-12 col-md-5 p-0 esquerda">
                        <h5 class="fontecontactos">Siga-me nas redes sociais</h5>
                        <div class="col p-0 caixaimagens">
                            <a href="<?=getInstagram();?>"><img id="redes01" class="imgredes" src="<?= $url_public; ?>Imagens/instagram1.svg" onmouseenter="mudarSrc('redes01', '<?= $url_public; ?>Imagens/instagram2.svg')" onmouseleave="mudarSrc('redes01', '<?= $url_public; ?>Imagens/instagram1.svg')"></a>
                            <a href="<?=getFacebook();?>"><img id="redes02" class="imgredes" src="<?= $url_public; ?>Imagens/facebook1.svg" alt="facebook" onmouseenter="mudarSrc('redes02','<?= $url_public; ?>Imagens/facebook2.svg')" onmouseleave="mudarSrc('redes02', '<?= $url_public; ?>Imagens/facebook1.svg')"></a>
                            <a href="<?=getLinkedin();?>"><img id="redes03" class="imgredes" src="<?= $url_public; ?>Imagens/linkedin1.svg" alt="linkedin" onmouseenter="mudarSrc('redes03', '<?= $url_public; ?>Imagens/linkedin2.svg')" onmouseleave="mudarSrc('redes03', '<?= $url_public; ?>Imagens/linkedin1.svg')"></a>    
                        </div>
                    </div>
                    <div class="col-12 col-md-7 p-0 caixaimgfundo">
                        <a href="https://www.livroreclamacoes.pt/" target="_blank"><img class="imgfundo01" src="<?= $url_public; ?>Imagens/livroreclamacoes.svg" alt=""></a>
                        <a href="https://sebastiaoalves.com/ralc"><img class="imgfundo02" src="<?= $url_public; ?>Imagens/ralc.svg" alt=""></a>
                    </div>
                    <div class="col-12 col-md-5 p-0 caixacopyright">
                        <p class="fontep">Politica de Cookies.</p>
                        <p class="fontep">Copyright &copy; <?= date("Y")?> Cláudia Teodoro. Todos os direitos reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Link JavaScript-->
    <script src="<?= $url_public; ?>JS/main.js"></script>
    <script src="<?= $url_public; ?>JS/funcoes.js"></script>
    
    <?php if($rotas[0] != "" && $rotas[0] != "home"): ?>
        <script>moverPagina();</script>
    <?php endif; ?>
</body>
</html>