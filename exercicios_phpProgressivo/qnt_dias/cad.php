<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mes = $_GET["mes"];
        $dias = 28;
        $aux = 0;

        switch($mes){
            case 1: case 3: case 5: case 7: 
            case 8: case 10: case 12:
                $dias+=3;
                break;
            case 4: case 6: case 9: case 11:
                $dias+=2;
                break;
            case 2:
                $dias = $dias;
                break;
            default:
                $aux+=1;
                break; 
        }
    
        if($aux==0){
            echo "Mes $mes tem $dias dias.";
        } else{
            echo "Os meses so vao de 1 a 12";
        }
    ?>
</body>
</html>