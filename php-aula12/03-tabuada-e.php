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
        $num = $_GET[num];
        $c = 0;
        do{
            $r=$num*$c;
            echo "$num X $c = $r <br/>";
            $c++;
        } while ($c <=10);
    ?>
</div>
</body>
</html>
 