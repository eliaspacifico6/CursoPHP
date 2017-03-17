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
        /* Deixa a primeira lertra de cada palavra em maiusculas*/
        $nome = "elias GuiMarães PacIfico";
        $nome2 = ucwords(strtolower($nome));

        echo "Seu nome é $nome2";
    ?>
</div>
</body>
</html>