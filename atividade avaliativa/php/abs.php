<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função ABS</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <p>Retorna um valor do mesmo tipo que é passado para ele especificando o valor absoluto de um número.</p>
    <form action="abs.php" method="get">
        <label for="abs">Insira um número</label><br>
        <input type="number" name="abs" id="abs" class="calculos" required>
        <button type="Submit">Enviar</button>
    </form>

    <?php
    if(isset($_GET["abs"])) {
        $abs = $_GET["abs"];
        echo "<p>O valor absoluto de $abs é " . abs($abs) . "</p>";
    }
    ?>

    <button onclick="window.location.href = '../atividade.html';">Voltar</button>
</body>
</html>
