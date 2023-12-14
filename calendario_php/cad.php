<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
</head>
<body>
<?php
    function linha(){   
        echo "
            <tr>
                <td>{$semana}</td>
                <td>{$semana}</td>
                <td>{$semana}</td>
                <td>{$semana}</td>
                <td>{$semana}</td>
                <td>{$semana}</td>
                <td>{$semana}</td>
            </tr>
        ";
    }     
    
    function calendario(){
        $dia = 1;
        $semana = array();

        while($dia<=31){
            array_push($semana, $dia);

            if(count($semana)==7){
                linha($semana);
                $semana = array();
            }

            $dia++;
        }
    }
?>



    <table border="1">
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sab</th>
    

    <?php calendario(); ?>

    </table>
</body>
</html>