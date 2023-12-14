<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario Liquido</title>
</head>
<body>

    <?php
        use \Psr\Http\Message\ServerRequestInterface as Request;
        use \Psr\Http\Message\ResponseInterface as Response;
        
        require 'vendor/autoload.php';
        
        $app = new \Slim\App();
        
        $app->get('/hello/{name}', function (Request $request, Response $response) {
            $name = $request->getAttribute('Pedro');
            echo "Hello, $name!";
        });
        
        $app->run();

        $bruto = $_GET["salarioBruto"];

        $ir = (($bruto*11)/100);
        $inss = (($bruto*8)/100);
        $sind = (($bruto*5)/100);

        $liquido = $bruto - ($ir + $inss + $sind);

        echo "+ Salario Bruto : R$ $bruto </br>";
        echo "- IR (11%) = R$$ir </br>";
        echo "- INSS (8%) = R$$inss </br>";
        echo "- Sindicato (5%) = R$$sind </br>";
        echo "- Liquido = R$$$liquido </br>";

    ?>
</body>
</html>