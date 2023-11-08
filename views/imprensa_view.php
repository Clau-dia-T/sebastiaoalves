<?php 
$lista_imprensa = getListaImprensa(); 

$pagina = (isset($_POST["pagina"]) && !empty($_POST["pagina"])) ? $_POST["pagina"] : 1;
$elementos_por_pagina = 2;
$offset = ($pagina-1) * $elementos_por_pagina;

$total_elementos = intval(selectSQLUnico("SELECT Count(id) as total FROM imprensa")["total"]);
$total_paginas = ceil($total_elementos / $elementos_por_pagina);

$resultados = selectSQL("SELECT * FROM imprensa ORDER BY id DESC LIMIT $elementos_por_pagina OFFSET $offset ");

$numero_botoes = 2;
$inicio = $pagina - $numero_botoes;
$final = $pagina + $numero_botoes;

$contagem = count($resultados);
?>

<main class="container-fluid p-0">
    <!-- Área Titulo -->
    <div class="row m-0">
        <div class="col p-0 caixatitulo sombra" id="target_pagina">
            <div class="col fontemenus fonteactivodouradob4" id="titulocaixat">Imprensa</div>
            <div class="col fontet1modificada" id="textocaixat">Últimas notícias</div>
        </div>
    </div>
    <!-- Área Notícias -->
    <?php foreach($resultados as $r): ?>
        <div class="row m-0 imp <?= ($r == $resultados[0]) ? "sombraimprensa" : ""; ?>">
            <div class="col p-0 caixaimp01">
                <div class="col-12 topoimp">
                    <div class="col-12 tituloimp fontet1modificada">
                        <?= getTituloImprensa($r['id'])?>
                    </div>
                    <div class="col-12 p-0 separadorimp">
                        <hr class="separador03">
                    </div>
                    <div class="col-12 dataimp fontedatapublicacao"><?= getDataPubImprensa($r['id']);?></div>
                    <div class="col-12"><img src="<?= getImagemImprensa($r['id']);?>" alt="imprensa" class="impimg"></div>
                    <div class="col-12">
                        <span class="fontep">
                            <?= getTextoImprensa($r['id']);?>
                        </span>
                    </div>
                </div>
            </div>
           
            <?php if(($contagem == 2 && $r == $resultados[1]) || ($contagem == 1 && $r == $resultados[0])): ?>
                <!-- Paginação -->
                <div class="row m-0">
                    <div class="col-12 p-0 paginacao">
                        <form method="POST" class="d-flex justify-content-center">
                            <button name="pagina" <?=($pagina == 1)? "disabled" : "";?> value="<?= $pagina-1; ?>"><img src="<?= $url_public; ?>Imagens/setaesquerda1.svg" alt="setaesq" class="setas" id="setaesq" onmouseenter="mudarSrc('setaesq', '<?= $url_public; ?>Imagens/setaesquerda2.svg')" onmouseleave="mudarSrc('setaesq', '<?= $url_public; ?>Imagens/setaesquerda1.svg')"></button>
                            <button name="pagina" value="1" class="fontepaginacao numpag <?= ($pagina == 1) ? "active" : ""; ?>">1</button>

                            <?php if($inicio > $numero_botoes): ?><span class="fontepaginacao numpag">...</span><?php endif; ?>

                            <?php for($i=$inicio; $i<=$final; $i++): ?>
                                <?php if($i>1 && $i<$total_paginas): ?>
                                    <button name="pagina" class="fontepaginacao numpag <?= ($i == $pagina) ? "active" : ""; ?>" value="<?= $i; ?>"><?= $i; ?></button>
                                <?php endif; ?>
                            <?php endfor; ?>

                            <?php if($final < $total_paginas-1): ?><span class="fontepaginacao numpag">...</span><?php endif; ?>

                            <?php if($total_paginas>1): ?>
                                <button name="pagina" value="<?= $total_paginas; ?>" class="fontepaginacao numpag <?= ($pagina == $total_paginas) ? "active" : ""; ?>"><?= $total_paginas; ?></button>
                            <?php endif; ?>
                            <button name="pagina" <?=($pagina == $total_paginas)? "disabled" : "";?> value="<?= $pagina+1; ?>"><img src="<?= $url_public; ?>Imagens/setadireita1.svg" alt="setadrt" class="setas" id="setadrt" onmouseenter="mudarSrc('setadrt', '<?= $url_public; ?>Imagens/setadireita2.svg')" onmouseleave="mudarSrc('setadrt', '<?= $url_public; ?>Imagens/setadireita1.svg')"></button>                                                                                          
                        </form>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>      
</main>