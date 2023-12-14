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
        $aux = $num;

        $prox_num = $num - 1;
        $result = $num;


        while($prox_num!=1){
            $result = $result * $prox_num;
            $prox_num--;
        }

        echo "$aux! = $result";
    ?>

</body>
</html>