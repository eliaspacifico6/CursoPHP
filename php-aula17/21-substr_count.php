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
        /* Encontra e conta as palavras */
        $frase = "Eu estou aprendendo PHP no Curso em Vídeo de PHP";
        $cont = substr_count($frase,"PHP");
        echo $frase;
        print ("<br/>PHP encontrado $cont vezes");
    ?>
</div>
</body>
</html>