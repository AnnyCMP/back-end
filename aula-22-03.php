<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 22-03</title>
</head>
<body>
    <?php
      $alunos = ["luis", "vermeio", "klein"];
      echo "<pre>";
      echo var_dump($alunos);
      echo "<br>";
      print_r($alunos);

      $cliente = ["jose",39,1.92, true];
      print_r($cliente);
      echo var_dump($cliente);

      $cursos = [];
      $cursos  [0] = "des sist";
      $cursos  [1] = "informatica";
      $cursos [4] = "eletro";
      print_r($cursos);

      echo "<h1> funcoes para vetores</h1> <br>";
      echo "adicionando depois do array push <br>";
      array_push($alunos, "luiza", "erik");
      print_r($alunos);
      
      echo "adicionando antes do array unshift <br>";
      array_unshift($alunos, "andre", "eduardo");
      print_r($alunos);

      echo "apagando o ultimo indice do vetor";
      array_pop( $alunos );
      print_r( $alunos );

      echo "apagando o primeiro indice do vetor";
      array_shift( $alunos );
      print_r( $alunos );

      echo "contando os elementos <br>";
      echo count($alunos);
      $qtd_alunos = count($alunos);
      echo "<br> qtd de alunos com variavel $qtd<br><br>";

      echo "ordenando menor para maior";
      sort($alunos);
      print_r($alunos);

      echo "ordenando maior para menor";
      rsort($alunos);
      print_r($alunos);
      echo "</pre>";


      $qtd = count($alunos);

      for ($i=0; $i < $qtd ; $i++) { 
        echo "$alunos[$i] <br>";
      }
      echo "<br>------- <br>";
      foreach(
        $alunos as $indice => $aluno) {
        echo "$indice : $aluno <br>";
      }
    ?>
</body>
</html>