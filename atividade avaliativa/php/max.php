<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função MAX</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <p>A função max retorna o maior valor de um conjunto de valores ou o maior de dois valores.</p>

    <form action="max.php" method="get">
        <label for="values">Insira os valores separados por vírgula</label><br>
        <input type="text" name="values" id="values" class="calculos" required><br>
        <button type="Submit">Calcular máximo</button>
    </form>

    <?php
    if(isset($_GET["values"])) {
        $values = explode(",", $_GET["values"]);
        $max_value = max($values);
        echo "<p>O maior valor é: $max_value</p>";
    }
    ?>

    <button onclick="window.location.href = '../atividade.html';">Voltar</button>
</body>
</html>
