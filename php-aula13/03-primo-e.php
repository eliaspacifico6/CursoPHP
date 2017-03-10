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
        $num = $_GET["num"];
        $q =0;
        echo "analizando do numer $num ...<br/>";
        echo "valores mutiplos: ";
        for ($c=1; $c<=$num;$c++){
            if ($num%$c == 0){
                echo "$c ";
                $q+=1;
            }
        }
        echo "<br/>Total de multiplos: $q <br/>";

        if ($q >= 3){
            echo "O numer: $num <span class='foco'>não é primo</span>";
        }
        else {
            echo "O numer: $num <span class='foco'>é primo</span>";
        }
     ?>

    <br/>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>
 