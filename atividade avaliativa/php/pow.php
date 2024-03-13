<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função POW</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <p>A função pow calcula a potência de um número.</p>

    <form action="pow.php" method="get">
        <label for="base">Insira a base</label><br>
        <input type="number" name="base" id="base" class="calculos" required><br>
        <label for="exponent">Insira o expoente</label><br>
        <input type="number" name="exponent" id="exponent" class="calculos" required><br>
        <button type="Submit">Calcular potência</button>
    </form>

    <?php
    if(isset($_GET["base"]) && isset($_GET["exponent"])) {
        $base = $_GET["base"];
        $exponent = $_GET["exponent"];
        echo "<p>O resultado de $base elevado a $exponent é: " . pow($base, $exponent) . "</p>";
    }
    ?>

    <button onclick="window.location.href = '../atividade.html';">Voltar</button>
</body>
</html>
