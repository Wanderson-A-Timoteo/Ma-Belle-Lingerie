<?php
    error_reporting(0);
    include_once("./classes/Lista.php");
    $lista = new Lista();
    $lista->setNumPagina($_GET["pg"]);
    $lista->setUrl("index.php?link=2");
?>

<h2> Lista de Categoria </h2>

<table cellPadding="0" cellSpacing="0" border="1">
    <thead>
        <tr>
            <th> ID </th>
            <th> Categoria </th>
            <th> Ativo </th>
            <th> Editar </th>
            <th> Excluir </th>
        </tr>
    </thead>

    <tbody>
        <?php $lista->listaCategoria();	?>

        <tr>
            <td colSpan="5"> <?php $lista->geraNumeros(); ?> </td>
        </tr>
    </tbody>

</table>