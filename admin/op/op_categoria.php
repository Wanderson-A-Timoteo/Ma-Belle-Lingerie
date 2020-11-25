<?php

    include_once("../classes/manipulacaoDeDados.php");

    $cat = new manipulacaoDeDados();
    $cat->setTabela("categoria");

    $txt_titulo = $_POST["txt_titulo"];
    $txt_ordem = $_POST["txt_ordem"];
    $txt_ativo = $_POST["txt_ativo"];

    $cat ->setCampos("categoria, slug_categoria, ordem_categoria, ativo_categoria");
    $cat ->setDados("'$txt_titulo', '', '$txt_ordem', '$txt_ativo'");
    $cat ->inserir();

    echo $cat->getMsg();
?>