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
        $rand = rand(1,10);
        
        if($rand==$numero) 
         echo "Voce acertou! Era $numero";
        else
         echo "Voce errou! Era $rand";
    ?>
</body>
</html>