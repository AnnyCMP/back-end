<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <?php
    $nome = $_GET ["nome"];
    $sobrenome = $_GET ["sobrenome"];
    $idade = $_GET ["idade"];
    $peso = $_GET ["peso"];
    $altura = $_GET ["altura"];

    echo "<p>Meu nome é $nome $sobrenome, tenho $idade anos, peso $peso kg e tenho $altura de altura.&#128536;</p>";
    ?>
    </body>
    </html>