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
        function soma ($a, $b) {
            $s=$a+$b;
            echo "<p>A soma vale: $s</p>";
        }

        soma(3,4);
        soma(9,10);
        soma(13,02);
        soma(3,-3);

    ?>
</div>
</body>
</html>
 