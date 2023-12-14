<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $linguagens = $_GET["linguagens"];

        switch($linguagens){
            case 'java_script':
                echo "JavaScript junto com PHP e perfeito";
                break;

            case 'c':
                echo "C e dificilzinho";
                break;

            case 'python':
                echo "Python e divertido"; 
                break;
            
            default:
                echo "Essas eu nao conheco";
                break;
        }

    ?>
</body>
</html>