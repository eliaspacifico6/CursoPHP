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
<<<<<<< HEAD
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $o = isset($_GET["oper"]) ? $_GET["oper"] : 0;
        switch ($o) {
            case 1: $r = $n*2;
            break;
            case 2 : $r = $n^3;
            break;
            case 3: $r = sqrt($n);
            break;
        }
        echo " O resultato da operação solicitada foi <span class='foco'>$r</span>"
=======
       $n = isset($_GET["num"])?$_GET["num"]:0;
       $o = isset($_GET["oper"])?$_GET["oper"]:1;
       switch ($o){
           case 1:
               $r = $n * 2;
               break;
           case 2:
               $r = $n ^ 3;
               break;
           case 3:
               $r = sqrt($n);
       }
    echo "O Resultado da operação solicitada foi <span class='foco'> $r </span>"
>>>>>>> 3f476ed30913de087ab6149f5faa51326fb959b6
    ?>
    <a href="exercicio01e.html" class="botao">Voltar</a>
</div>
</body>
</html>
 