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
    $nome="Elias";
    $vetor = trim($nome);
    $q = strlen($nome);

    print_r($vetor);
    print_r($q);
    ?>
</div>
</body>
</html>