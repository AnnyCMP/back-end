<?php
session_start();
include("conexao.php");

// Verifica se o admin está logado
if (!isset($_SESSION["admin_logged"]) || !$_SESSION["admin_logged"]) {
    header("Location: login.php");
    exit();
}

// Consulta para obter todos os clientes
$sql = "SELECT * FROM clientes";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #978e8c;
            color: white;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        a {
            color: #978e8c;
            text-decoration: none;
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        .header {
            background-color: #978e8c;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .header a {
            color: white;
            margin: 0 15px;
        }

        .btn-voltar {
            display: inline-block;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            margin: 10px 0;
        }

        .btn-voltar:hover {
            background-color: #218838;
        }
    </style>
    <script>
        function excluirCliente(id) {
            if (confirm('Tem certeza que deseja excluir?')) {
                const xhr = new XMLHttpRequest();
                xhr.open("GET", "excluir_cliente.php?id=" + id, true);
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        alert('Cliente excluído com sucesso!');
                        location.reload(); // Recarrega a página para atualizar a lista
                    } else {
                        alert('Erro ao excluir cliente: ' + xhr.responseText);
                    }
                };
                xhr.send();
            }
        }
    </script>
</head>
<body>
    <div class="header">
        <h2>Área do Administrador</h2>
        <a href="agendamentos.php">Gerenciar Agendamentos</a>
        <a class="btn-voltar" href="index.html">Voltar</a> <!-- Link para a página inicial -->
    </div>
    <div class="container">
        <h1>Lista de Clientes</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['nome']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td>
                        <a href="javascript:void(0);" onclick="excluirCliente(<?php echo $row['id']; ?>)">Excluir</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
$con->close();
?>