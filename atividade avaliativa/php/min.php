<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função MIN</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <p>A função min retorna o menor valor de um conjunto de valores ou o menor de dois valores.</p>

    <form action="min.php" method="get">
        <label for="values">Insira os valores separados por vírgula</label><br>
        <input type="text" name="values" id="values" class="calculos" required><br>
        <button type="Submit">Calcular mínimo</button>
    </form>

    <?php
    if(isset($_GET["values"])) {
        $values = explode(",", $_GET["values"]);
        $min_value = min($values);
        echo "<p>O menor valor é: $min_value</p>";
    }
    ?>

    <button onclick="window.location.href = '../atividade.html';">Voltar</button>
</body>
</html>
