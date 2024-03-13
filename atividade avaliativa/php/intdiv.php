<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função INTDIV</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <p>A função intdiv calcula o quociente da divisão de dois números, arredondando o resultado para o número inteiro mais próximo em direção a zero.</p>

    <form action="intdiv.php" method="get">
        <label for="dividend">Insira o dividendo</label><br>
        <input type="number" name="dividend" id="dividend" class="calculos" required><br>
        <label for="divisor">Insira o divisor</label><br>
        <input type="number" name="divisor" id="divisor" class="calculos" required><br>
        <button type="Submit">Calcular quociente</button>
    </form>

    <?php
    if(isset($_GET["dividend"]) && isset($_GET["divisor"])) {
        $dividend = $_GET["dividend"];
        $divisor = $_GET["divisor"];
        echo "<p>O quociente da divisão de $dividend por $divisor é: " . intdiv($dividend, $divisor) . "</p>";
    }
    ?>

    <button onclick="window.location.href = '../atividade.html';">Voltar</button>
</body>
</html>
