<?php
session_start();

if (empty($_POST) || empty($_POST["email"]) || empty($_POST["cpf"])) {
    header('Location: index.html');
    exit();
}

include("conexao.php");

$email = mysqli_real_escape_string($con, $_POST['email']);
$cpf = mysqli_real_escape_string($con, $_POST['cpf']);

// Verifica se é um administrador
$sql_admin = "SELECT * FROM administradores WHERE email='$email' AND cpf='$cpf'";
$res_admin = $con->query($sql_admin);

if ($res_admin === false) {
    die("Erro na consulta: " . $con->error);
}

if ($res_admin->num_rows > 0) {
    $_SESSION["admin_logged"] = true; // Marca que o admin está logado
    $_SESSION["email"] = $email;
    header('Location: admindashboard.php'); // Redireciona para a página do administrador
    exit();
}

// Verifica se é um cliente
$sql_cliente = "SELECT * FROM clientes WHERE email='$email' AND cpf='$cpf'";
$res_cliente = $con->query($sql_cliente);

if ($res_cliente === false) {
    die("Erro na consulta: " . $con->error);
}

if ($res_cliente->num_rows > 0) {
    $_SESSION["email"] = $email; 
    header('Location: agendamentos.php'); // Redireciona para a página de agendamentos
    exit();
} else {
    echo "<script>alert('Email ou CPF inválido');</script>";
    echo "<script>location.href='login.php';</script>";
}

$con->close();
?>