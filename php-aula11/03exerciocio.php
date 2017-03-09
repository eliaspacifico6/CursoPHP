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
        $num1=$_GET[num1];
        $num2=$_GET[num2];
        $incre=$_GET[incre];

        if ($num1 < $num2){
            while ($num1<=$num2){
                echo "$num1 <br/>";
                $num1 +=$incre;
            }
        }
        else {
            while ($num1>=$num2) {
                echo "$num1 <br/>";
                $num1 -=$incre;
            }
        }
    ?>
</div>
</body>
</html>
 