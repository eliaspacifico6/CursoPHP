<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date(Y) - $ano;
        echo "você nasceu em $ano e possui $i anos <br/>";

        if ($i>=18) {
            $v = "Já pode votar";
            $d = "Já pode dirigir";
        }
        else {
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "Com essa idade você $v e tambem $d";

    ?>
</div>
</body>
</html>
 