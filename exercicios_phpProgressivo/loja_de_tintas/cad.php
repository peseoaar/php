<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $area = $_GET["area"];

        $litros_tinta = $area / 6;
        
        // parte comentada e calculo separadao, parte com condicoes e para mosturar galoes e latas para comprar com o melhor preco

  /*    $latas = $litros_tinta / 18;
        $latas = ceil($latas); ## arredondando  
        $preco_latas = $latas * 80.00; 


        $galoes = $litros_tinta / 3.6;
        $galoes = ceil($galoes);
        $preco_galoes = $galoes * 25;    */

        $litros_lata = 18;
        $latas = 0;
        
        if($litros_tinta > 18){
            while($litros_tinta >= $litros_lata){
                $litros_lata+=18;
                $latas++;
            }
            $preco_latas = $latas * 80;
            $litros_lata = $litros_lata - 18;

            $litros_tinta = $litros_tinta - $litros_lata;
            $galoes = $litros_tinta / 3.6;
            $galoes = ceil($galoes);
            $preco_galoes = $galoes * 25; 
        } 
        else{
            $latas=0;
            $preco_latas=0;

            $galoes = $litros_tinta / 3.6;
            $galoes = ceil($galoes);
            $preco_galoes = $galoes * 25;  
        }
        
        $total = $preco_galoes + $preco_latas;
        

      /*  echo "Comprar apenas Latas de 18L: $latas lata(s) por R$$preco_latas </br>";
        echo "Comprar apenas Galoes de 3.6L: $galoes galoes(s) por R$$preco_galoes";*/
        
        echo "Serao gastos $latas latas: R$$preco_latas e $galoes galoes: R$$preco_galoes - TOTAL: R$$total";
    ?>
</body>
</html>