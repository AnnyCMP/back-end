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
    <p>Retorna um valor do mesmo tipo que é passado para ele especificando
         o valor absoluto de um número.</p>
    <form method="get">
    <label for="abs">Insira um número</label><br>
        <input type="number" name="abs" id="abs" class="calculos" required>
        
        <?php
        $abs=$_GET["abs"];
        abs()
 ?>
</body>
</html>