<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="02parte2.php">
        <?php
            $c=1;
            while ($c <= 5) {
                echo "valor $c: <input type='number' name='v$c' value='0' max='100' min='0'/><br/>";
                $c++;
            };
        ?>
        <input type="submit" value="Envivar" class="botao"/>
    </form>
</div>
</body>
</html>







