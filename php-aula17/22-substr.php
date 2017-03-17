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
        /* separa a penas um pedaço da string*/
        $site = "curso em Vídeo";
        $sub = substr($site ,5);
        echo "$sub";

    ?>
</div>
</body>
</html>