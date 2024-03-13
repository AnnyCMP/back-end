<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função SIN</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <p>A função sin retorna o seno de um ângulo, em radianos.</p>

    <form action="sin.php" method="get">
        <label for="angle">Insira o ângulo (em graus)</label><br>
        <input type="number" name="angle" id="angle" class="calculos" required><br>
        <button type="Submit">Calcular seno</button>
    </form>

    <?php
    if(isset($_GET["angle"])) {
        $angle = $_GET["angle"];
        $angle_rad = deg2rad($angle);
        echo "<p>O seno de $angle graus é: " . sin($angle_rad) . "</p>";
    }
    ?>

    <button onclick="window.location.href = '../atividade.html';">Voltar</button>
</body>
</html>
