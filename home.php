
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
    </section>

    <div id="lado-direito">
        <h3 class="titulo fundo_azul">Lista de Produtos</h3>
        <section class="vitrine">
        <?php
                    
            $lista = $categoria->todasCategorias();
            for ($i = 0; $i < count($lista); $i++){
                $cat=$lista[$i];
                $idcat = $cat->getId();
        ?>
            <h2> <?php echo $cat->getCategoria() ?> </H2>
            <ul>
            <?php
                
                $cat_prod = $produto->getProdutosPorCategoria($idcat);
                for ($j = 0; $j < count($cat_prod); $j++){
                    $prod = $cat_prod[$j];
            ?>
                <li>
                    <a href="">
                            <img src="admin/fotos/<?php echo $prod->getImagemProduto() ?>" alt="Conjunto">
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
            <?php } ?>
        </section>
    </div>
</div>