<?php
    error_reporting(0);
    $id=$_GET["id"];
    
?>

<div id="corpo-loja">
    <aside class="banner"> 
        <img src="imagens/banner-meio-promocao.png" alt="Banner de Promoção">
    </aside>

    <section class="categorias">
        <h2 class="fundo_azul"> Categorias </h2>
        <nav>
            <ul class="fundo_azul">
                <?php
                    
                    $lista = $categoria->todasCategorias();
                    for ($i = 0; $i < count($lista); $i++){
                        $cat=$lista[$i];
                        $idcat = $cat->getId();
                ?>
                <li><a href="#"> .:<?php echo $cat->getCategoria() ?> </a></li>
                    <ul>
                    <?php
                        
                        $cat_prod = $produto->getProdutosPorCategoria($idcat);
                        for ($j = 0; $j < count($cat_prod); $j++){
                            $prod = $cat_prod[$j];
                    ?>
                    <li> <a href=""> <?php echo $prod->getTituloProduto() ?> </a> </li>
                    <?php } ?>
                    </ul>
                <?php } ?>
            </ul>
        </nav>

        <?php
            $prod->setId($id);
            $prod->mostrarDados();
        ?>

    </section>

    <div id="lado-direito">
        <section class="vitrine">
            <div id="cx-img-produto">
                <a href="#"> <img src="admin/fotos/<?php echo $prod->getImagemProduto() ?>" alt="Foto do Produto" width="220" height="330"></a>
            </div>
            <div id="cx-titulo-produto">
                <h1> <a href=""><?php echo $prod->getTituloProduto() ?></a> </h1>
            </div>
            <div id="cx-preco-produto">
                <span> Valor: </span> <strong> <?php echo $prod->getPreco() ?> </strong>
            </div>
            <div class="modelo-fabricante">
                <h3> 
                    <span> Modelo: </span> 
                    <strong> <?php echo $prod->getModelo() ?> </strong>
                </h3>
            </div>
            <div class="modelo-fabricante">
                <h4> 
                    <span> Fabricante: </span>
                    <strong id="fabricante"> <?php echo $prod->getFabricante() ?> </strong>
                </h4>
            </div>
            <div id="descricao-rapida">
                <h2> Descrição rápida </h2>
                <p>
                <?php echo $prod->getDescricao() ?>
                </p>
            </div>
            <div id="comprar-produto">
                <form action="">
                    <input type="submit" value="">
                </form>
            </div>

            <section id="abas-geral">
                <ul class="menu">
                    <li> <h3> Descrição </h3> </li>
                </ul>
                <section id="box">
                    <div id="aba01" class="conteudo">
                        <article id="descricao">
                            <p>
                                <?php echo $prod->getConteudo() ?>
                            </p>
                        </article>
                    </div>
                </section>
            </section>

            <div id="sugestao">
                <h3 class="titulo fundo_azul">Sugestões de compra</h3>
                <ul>
                    <?php
                        
                        $cat_prod = $produto->getProdutosPorCategoria($idcat);
                        for ($j = 0; $j < count($cat_prod); $j++){
                            $prod = $cat_prod[$j];
                    ?>
                    <li>
                        <a href="index.php?link=2&id=<?php echo $prod->getId() ?>">
                                <img src="admin/fotos/<?php echo $prod->getImagemProduto() ?>" alt="Imagem do produto">
                                <figcaption> <?php echo $prod->getTituloProduto() ?> </figcaption>
                            </figure>
                            <span> <?php echo $prod->getPreco() ?> </span>
                            <form action="">
                                <input type="submit" value="">
                            </form>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </div>
</div>
