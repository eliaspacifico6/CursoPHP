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
        if ($i<16) {
            $tipoVoto = "não Vota!";
        }
        elseif (($i>=16 && $i<18) || ($i>65)) {
                $tipoVoto = "Voto Opcional";
        }
        else {
            $tipoVoto = "Voto Obrigatorio";
        }
        echo "Para essa Idade, $tipoVoto";
    ?>
</div>
</body>
</html>
 