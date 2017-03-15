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
        $frase = "Eu vou estudar PHP psra eu saber";
        $cont = str_word_count($frase,2);

        echo $cont;
        echo "<br/>";
        print_r($cont);
    ?>
</div>
</body>
</html>
 