<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor de PI</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <p>O valor de π (pi) é uma constante matemática que representa a relação entre a circunferência de um círculo e seu diâmetro.</p>

    <button onclick="mostrarPI()">Mostrar valor de π</button>

    <p id="valor_pi"></p>

    <script>
        function mostrarPI() {
            var valor_pi = Math.PI;
            document.getElementById("valor_pi").innerHTML = "O valor de π é: " + valor_pi;
        }
    </script>

    <button onclick="window.location.href = '../atividade.html';">Voltar</button>
</body>
</html>
