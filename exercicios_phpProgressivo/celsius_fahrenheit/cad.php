<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $escolha = $_GET["escolha"];
        $valor = $_GET["valor"];
        
        
        function CtoF($valor){
            $aux = $valor;
            $valor = ($valor*(9/5)) + 32;
            echo "$aux C e igual a $valor F";
        }

        function FtoC($valor){
            $aux = $valor;
            $valor = ($valor-32) * 5/9;
            echo "$aux F e igual a $valor C";
        }
        
        switch($escolha){
            case 1:
                return CtoF($valor);
            case 2:
                return FtoC($valor);
            default:
                echo "Opcao inexistente!";
        }
    ?>
</body>
</html>