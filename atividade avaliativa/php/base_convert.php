<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função base_convert</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <p>Converte um número para uma string representando o número na base especificada.</p>
    <form action="base_convert.php" method="get">
        <label for="number">Insira um número decimal</label><br>
        <input type="number" name="number" id="number" class="calculos" required><br>
        <label for="from_base">Insira a base atual (2-8-10-16)</label><br>
        <input type="number" name="from_base" id="from_base" class="calculos" min="2" max="36" required><br>
        <label for="to_base">Insira a base desejada (2-8-10-16)</label><br>
        <input type="number" name="to_base" id="to_base" class="calculos" min="2" max="36" required><br>
        <button type="Submit">Converter</button>
    </form>

    <?php
    if(isset($_GET["number"]) && isset($_GET["from_base"]) && isset($_GET["to_base"])) {
        $number = $_GET["number"];
        $from_base = $_GET["from_base"];
        $to_base = $_GET["to_base"];
        echo "<p>O número $number na base $from_base é equivalente a " . base_convert($number, $from_base, $to_base) . " na base $to_base</p>";
    }
    ?>

    <button onclick="window.location.href = '../atividade.html';">Voltar</button>
</body>
</html>
