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
        $est = $_GET["est"];
        switch ($est){
            case "AC":
            case "AP":
            case "AM":
            case "PA":
            case "RO":
            case "RR":
            case "TO":
                $r = "Regiao Norte";
            break;
            case "AL":
            case "BA":
            case "CE":
            case "MA":
            case "PB":
            case "PE":
            case "PI":
            case "RN":
            case "SE":
                $r = "Regiao Nordeste";
                break;
            case "DF":
            case "GO":
            case "MT":
            case "MS":
                $r = "Regiao Centro-Oeste";
                break;
            case "ES":
            case "MG":
            case "RJ":
            case "SP":
                $r = "Regiao Sudeste";
                break;
            case "PR":
            case "RS":
            case "SC":
                $r = "Regiao Sul";
                break;
            default:
                $r = "Regiao Invalida";
        }
        echo "Você mora na regiao <span class='foco'>$r </span>";
    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 