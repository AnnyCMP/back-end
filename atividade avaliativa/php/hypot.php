<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função HYPOT</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <p>O hypot é uma função matemática que calcula a hipotenusa de um triângulo retângulo, dadas as medidas dos dois catetos.</p>

    <form action="hypot.php" method="get">
        <label for="side1">Insira o comprimento do primeiro cateto</label><br>
        <input type="number" name="side1" id="side1" class="calculos" required><br>
        <label for="side2">Insira o comprimento do segundo cateto</label><br>
        <input type="number" name="side2" id="side2" class="calculos" required><br>
        <button type="Submit">Calcular hipotenusa</button>
    </form>

    <?php
    if(isset($_GET["side1"]) && isset($_GET["side2"])) {
        $side1 = $_GET["side1"];
        $side2 = $_GET["side2"];
        echo "<p>A hipotenusa do triângulo retângulo com catetos de comprimento $side1 e $side2 é: " . hypot($side1, $side2) . "</p>";
    }
    ?>

    <button onclick="window.location.href = '../atividade.html';">Voltar</button>
</body>
</html>
