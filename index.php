<?php

    include_once("admin/classes/DadosDoBanco.php");

    $categoria = new DadosCategoria();

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Belle Lingerie</title>
    <link rel="stylesheet" href="css/css.css">
    <script type="text/javascript" src="js/abas.js"></script>
  </head>
  <body>
    <div id="Principal">
      <section id="cabecalho">
        <?php include_once("cabecalho.php"); ?>
      </section><!-- Fim topo-->

      <section id="corpo">
        <?php
            $link = $_GET["link"];

            $pag[1] = "home.php";
            $pag[2] = "detalhe.php";
          
            if (!empty($link)) {
                if (file_exists($pag[$link])) {
                    
                    include $pag[$link];

                } else {
                
                    include "home.php";
                
                }

            } else {

                include "home.php";
            }

        ?>
      </section ><!-- Fim corpo-->

      <footer  id="rodape">
        <?php include_once("rodape.php"); ?>
      </footer><!-- Fim rodape-->
    </div><!-- Fim Principal-->
  </body>
</html>