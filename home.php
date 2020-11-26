<div id="corpo-loja">
    <aside class="banner"> 
        <img src="imagens/banner-meio-promocao.png" alt="Banner de Promoção">
    </aside>

    <section class="categorias">
        <h2 class="fundo_azul"> Categorias </h2>
        <nav>
            <ul class="fundo_azul">
                <?php
                    $sql = "SELECT * FROM  categoria";
                    $total = $categoria->totalRegistros($sql);
                    for ($i = 0; $i < $total; $i++){
                        $categoria->verCategorias($sql, $i);
                        $idcat = $categoria->getId();

                ?>
                <li><a href="#"> .:<?php echo $categoria->getCategoria(); ?> </a></li>
                    <ul>
                    <?php
                        $sql_prod = "SELECT * FROM produto WHERE id_categoria = '$idcat' ";
                        $total_prod = $categoria->totalRegistros($sql_prod);
                        for ($j = 0; $j < $total_prod; $j++){
                            $produto-> verProdutos($sql_prod, $j);
                    ?>
                    <li> <a href="#"> <?php echo $produto->getTituloProduto(); ?> </a> </li>
                    
                    <?php } ?>
                    
                    </ul>

                <?php } ?>
                
            </ul>
        </nav>
    </section>

    <div id="lado-direito">
        <h3 class="titulo fundo_azul">Lista de Produtos</h3>
        <section class="vitrine">
            <h2> Categoria do Produto </H2>
            <ul>
                <li>
                    <a href="#">
                            <img src="imagens/conjunto.png" alt="Conjunto">
                            <figcaption>Conjunto Calvin Klein - Vermelho</figcaption>
                        </figure>
                        <span> R$ 37,90 </span>
                        <form action="">
                            <input type="submit" value="">
                        </form>
                    </a>
                </li>

                <li>
                    <a href="#">
                            <img src="imagens/conjunto.png" alt="Conjunto">
                            <figcaption>Conjunto Calvin Klein - Vermelho</figcaption>
                        </figure>
                        <span> R$ 37,90 </span>
                        <form action="">
                        <input type="submit" value="">
                        </form>
                    </a>
                </li>

                <li>
                    <a href="#">
                            <img src="imagens/conjunto.png" alt="Conjunto">
                            <figcaption>Conjunto Calvin Klein - Vermelho</figcaption>
                        </figure>
                        <span> R$ 37,90 </span>
                        <form action="">
                        <input type="submit" value="">
                        </form>
                    </a>
                </li>

                <li>
                    <a href="#">
                            <img src="imagens/conjunto.png" alt="Conjunto">
                            <figcaption>Conjunto Calvin Klein - Vermelho</figcaption>
                        </figure>
                        <span> R$ 37,90 </span>
                        <form action="">
                        <input type="submit" value="">
                        </form>
                    </a>
                </li>

                <li>
                    <a href="#">
                            <img src="imagens/conjunto.png" alt="Conjunto">
                            <figcaption>Conjunto Calvin Klein - Vermelho</figcaption>
                        </figure>
                        <span> R$ 37,90 </span>
                        <form action="">
                        <input type="submit" value="">
                        </form>
                    </a>
                </li>
            </ul>
        </section>



    </div>


</div>