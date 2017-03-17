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
        /* Deixa tudo em maiusculas*/
        $nome = "Elias Guimarães Pacífico";
        $nome2 = strtoupper($nome);

        echo "Seu nome é $nome2";
    ?>
</div>
</body>
</html>