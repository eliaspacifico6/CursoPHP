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
        /* Deixa a string de trás para frente*/
        $nome = "elias guimaraes pacifico";
        $nome2 = strrev($nome);

        echo "Seu nome é $nome2";
    ?>
</div>
</body>
</html>