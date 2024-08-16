<?php
    if(true){
        echo(" cadastrado com sucesso!");
        //echo "<p><a href='login.php'>Fazer Login</a></p>";
        echo"<script> location.href='login.php';</script>";
        include_once('conexao.php');

        $cpf =$_POST['cpf'];
        $nome =$_POST['nome'];
        $email =$_POST['email'];
        $cidade =$_POST['cidade'];
        $telefone =$_POST['telefone'];
        $datan =$_POST['datan'];
        
        $result = mysqli_query($con,"INSERT INTO clientes(cpf, nome, email, cidade, telefone, datan) values ('$cpf','$nome','$email','$cidade','$telefone','$datan');");

        
    }else{
        echo("Algo ocorreu. Não foi possível realizar o cadastro.");
    }
?>