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
        /* encontra a posição da palvra na string*/
        $frase = "Eu estou aprendendo PHP";
        $pos = strpos($frase, "PHP");

echo "$frase <br/>";
        echo "A string foi encontrada na posição $pos";
    ?>
</div>
</body>
</html>