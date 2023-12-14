<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero = $_GET["numero"];

        echo "!$numero =" .fatorial($numero);

        function fatorial($numero){
            if($numero==1)
                return 1;
            else
                return $numero * fatorial($numero - 1);
        }
    ?>
</body>
</html>