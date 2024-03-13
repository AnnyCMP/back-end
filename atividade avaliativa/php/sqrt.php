<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função SQRT</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <p>A função sqrt calcula a raiz quadrada de um número.</p>

    <form action="sqrt.php" method="get">
        <label for="number">Insira um número</label><br>
        <input type="number" name="number" id="number" class="calculos" required><br>
        <button type="Submit">Calcular raiz quadrada</button>
    </form>

    <?php
    if(isset($_GET["number"])) {
        $number = $_GET["number"];
        echo "<p>A raiz quadrada de $number é: " . sqrt($number) . "</p>";
    }
    ?>

    <button onclick="window.location.href = '../atividade.html';">Voltar</button>
</body>
</html>
