<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hoje e dia" .date(" d/m/y l") ;
        echo " Agora sao" .date(" H:i a ");
        $dia = date("w");
        
        
        switch (date($dia)){
            case 0:
                echo "Fatam 7 dias para sabado";
                break;
            case 1:
                echo "Faltam 5 dias para sabado";
                break;
            case 2:
                echo "Faltam 4 dias para sabado";
                break;  
            case 3:
                echo "Faltam 3 dias para sabado";
                break;
            case 4:
                echo "Faltam 2 dias para sabado";
                break;  
            case 5:
                echo "Faltam 1 dias para sabado";
                break; 
            case 6:
                echo "Hoje e sabado";
                break; 
        }

        echo date("D");
    ?>
</body>
</html>