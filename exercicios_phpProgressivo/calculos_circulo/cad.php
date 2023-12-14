<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       ## Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo.
       ## Para saber o valor do pi, use: M_PI (ele armazena o valor de pi)
       
        $raio = $_GET["raio"];

        ## perimetro--> P = 2 * π * r
        $perimetro = 2 * M_PI * $raio; 
        ## area --> pi * r ** 2
        $area = M_PI * $raio ** 2;

        echo "com o raio $raio, o circulo tem: </br>";
        echo "perimetro: $perimetro </br>";
        echo "area: $area";

        
    ?>
</body>
</html>