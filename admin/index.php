<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Belle Lingerie</title>
    <link rel="stylesheet" href="style/adm.css">
    <script type="text/javascript" src="js/abas.js"></script>
  </head>
  <body>
    <div id="Principal">
      <div id="cabecalho">
        <?php include_once("cabecalho.php"); ?>
      </div><!-- Fim topo-->

      <div id="corpo">
        <nav id="esquerdo">
            <?php include_once("menu.php");?>
        </nav>

        <div id="direito">
            <?php
                $link = $_GET["link"];

                $pag[1] = "home.php";
                $pag[2] = "lst/lst_categoria.php";
                $pag[3] = "frm/frm_categoria.php";

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
        </div>
      </div>
    </div>
    <footer  id="rodape">
        <?php include_once("rodape.php"); ?>
      </footer><!-- Fim rodape-->
  </body>
</html>
