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
        /* repete a fraze substiruimdo a centença*/
        $frase = "Gosto de estudar PHP online no curso em vídeo !!!";
        $novaFrase = str_replace("PHP", "html", $frase);

        echo $frase;

        echo " <br/>$novaFrase"

    ?>
</div>
</body>
</html>