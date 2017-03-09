<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="03-tabuada-e.php">
        Numero: <select name="num">
            <?php
                $n=1;
                do {
                    echo "<option value='$n'>$n</option>";
                    $n++;
                } while ($n<=10);
            ?>
        </select>
        <input type="submit" value="Enviar" class="botao">
    </form>
</div>
</body>
</html>
 