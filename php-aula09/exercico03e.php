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
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $med = ($n1+$n2)/2;
    echo "As notas foram: $n1 e $n2<br/>";
    echo "A sua media é $med. <br/> Sua situiação é: ";
    if ($med<4){
        echo "REPROVADO!";
    }
    elseif (($med>=4)&&($med<7)){
        echo "RECUPERAÇÃO!";
    }
    else {
        echo "APROVADO!";
    }
    ?>
</div>
</body>
</html>
 