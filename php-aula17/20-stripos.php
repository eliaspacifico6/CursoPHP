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
        /* encontra a posição da palvra na string iginorando a caixa maiuscula ou minuscula*/
        $frase = "Eu estou aprendendo PHP";
        $pos = stripos($frase, "php");

echo "$frase <br/>";
        echo "A string foi encontrada na posição $pos";
    ?>
</div>
</body>
</html>