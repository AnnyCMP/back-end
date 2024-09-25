<?php
session_start();

// Ativar exibição de erros para debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (empty($_POST) || empty($_POST["email"]) || empty($_POST["cpf"])) {
    header('Location: index.html');
    exit();
}

include("conexao.php");

$email = mysqli_real_escape_string($con, $_POST['email']);
$cpf = mysqli_real_escape_string($con, $_POST['cpf']);

// Verifica se é um administrador
$sql = "SELECT * FROM administradores WHERE email='$email' AND cpf='$cpf'";
$res = $con->query($sql);

if ($res === false) {
    die("Erro na consulta: " . $con->error);
}

if ($res->num_rows > 0) {
    // Se for administrador
    $_SESSION["admin_logged"] = true; 
    $_SESSION["email"] = $email;
    $_SESSION["is_admin"] = ($email === 'adm123@gmail.com'); 
    header('Location: admindashboard.php'); 
    exit();
} else {
    // Se não for administrador, verifica se é cliente
    $sql = "SELECT * FROM clientes WHERE email='$email' AND cpf='$cpf'";
    $res = $con->query($sql);

    if ($res === false) {
        die("Erro na consulta: " . $con->error);
    }

    if ($res->num_rows > 0) {
        // Se for cliente
        $_SESSION["client_logged"] = true; 
        $_SESSION["email"] = $email; 
        header('Location: agendamentos.php'); 
        exit();
    } else {
        // Nenhum usuário encontrado
        echo "<script>alert('Email ou CPF inválido');</script>";
        echo "<script>location.href='login.php';</script>";
        exit(); // Adicionando exit para garantir que nada mais será executado
    }
}

$con->close();
?>
