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
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz de valor  $valor é igual á ". number_format($rq,2);
    ?>
    <br/> <a href="exercicios.html">Voltar</a>

</div>
</body>
</html>
 