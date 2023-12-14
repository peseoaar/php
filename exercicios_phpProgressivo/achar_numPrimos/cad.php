<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = $_GET["num"];
        $prox_num = 1;
        $count = 0;

        while($prox_num!=$num){
            if($num % $prox_num == 0){
                $count++;
            }
            $prox_num++;
        }

        echo ($count<=2) ? "$num e primo" : "$num nao e primo";
    ?>
</body>
</html>