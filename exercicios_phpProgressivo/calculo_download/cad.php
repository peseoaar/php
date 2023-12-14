<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tamanho_arquivo = $_GET["tamanho_arquivo"];
        $vel_link = $_GET["vel_link"];

        $tempo_download = $tamanho_arquivo / $vel_link;
        $tempo_download = $tempo_download / 60;
        $tempo_download = round($tempo_download, 2);
        
        echo "Serao gastos $tempo_download minutos para baixar o arquivo";
    ?>
</body>
</html>