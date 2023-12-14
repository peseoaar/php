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

        echo "O somatorio de $numero e: " .somatorio($numero);

        function somatorio($numero){
            if($numero==1)
                return 1;
            else
                return $numero + somatorio($numero-1);
        }
    ?>
</body>
</html>