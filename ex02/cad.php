<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        $numero = $_GET["numero"];
        $divisel = 0;

        if($numero % 10==0){
            $divisivel = 10;
        } else if($numero %5 ==0){
            $divisivel = 5;
        } else if($numero %2==0){
            $divisivel = 2;
        } else{
            $divisivel = $numero;
        }

        echo "O numero $numero e divisel por $divisivel";
    ?>
</body>
</html>