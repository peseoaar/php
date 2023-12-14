<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="tamanho">Digite a quantidade de numeros que deseja ver:</label>
        <input type="number" name="tamanho"/>
        <input type="submit" value="Mostrar"/>
    </form>

    <a>Termo 1 = 0</a><br>
    <a>Termo 2 = 1</a><br>

    <?php
        $qtd = $_GET["tamanho"]; 
        $count = 1;
        $termo = 3;

        if($qtd<=2){
            echo "Digite um numero maior que 2";
        }else{

            $penultimo_numero = 0;
            $ultimo_numero = 1;
            

            for($count==0; $count<=$qtd; $count++){
                $atual = $ultimo_numero + $penultimo_numero;
                echo"Termo $termo = $ultimo_numero + $penultimo_numero = $atual </br>";

                $penultimo_numero = $ultimo_numero;
                $ultimo_numero = $atual;
                $termo++;
            }
        }
    ?>
</body>
</html>