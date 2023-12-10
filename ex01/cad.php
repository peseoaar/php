<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retorno</title>
</head>
<body>
    <?php
        $n1 = $_GET["numero1"];
        $n2 = $_GET["numero2"];

        $soma = $n1 + $n2;

        if($soma>20){
            $soma += 8;
            echo "$soma";
        } else {
            $soma -= 5;
            echo "$soma";
        }
    ?>
</body>
</html>