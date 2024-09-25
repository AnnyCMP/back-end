<?php
session_start();
include("conexao.php");

if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos - Estética</title>
    <link rel="stylesheet" type="text/css" href="estiloagendamento.css">
    <style>
        .horario {
            margin-bottom: 20px; /* Espaço entre os horários */
        }

        .dia-agendamento {
            margin-bottom: 18px; /* Espaço entre o select e o botão */
        }
    </style>
</head>
<body>

<header>
    <img src="imagens/B.png" alt="Logo" />
</header>

<h2>Agendamentos Disponíveis</h2>

<div class="horarios">
    <?php
    $horarios = ["10:00", "11:00", "13:00", "14:00", "15:00", "16:00", "17:00"];
    $dias_da_semana = ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
    foreach ($horarios as $horario) {
        echo "
        <div class='horario' data-time='$horario'>
            <h3>$horario</h3>
            <p>Disponível</p>
            <select class='dia-agendamento'>
                <option value=''>Escolha um dia</option>
                ";
                foreach ($dias_da_semana as $dia) {
                    echo "<option value='$dia'>$dia</option>";
                }
        echo "
            </select>
            <button class='agendar'>Agendar</button>
        </div>
        ";
    }
    ?>
</div>

<script>
    document.querySelectorAll('.agendar').forEach(button => {
        button.addEventListener('click', function() {
            const horarioDiv = this.parentElement;
            const horarioTime = horarioDiv.dataset.time;
            const diaSelect = horarioDiv.querySelector('.dia-agendamento');
            const dia = diaSelect.value;

            // Verifica se já existe um agendamento
            if (document.querySelector('.horario.agendado') && !horarioDiv.classList.contains('agendado')) {
                alert('Você já tem um agendamento. Por favor, cancele antes de agendar outro.');
                return;
            }

            if (dia) {
                if (horarioDiv.classList.contains('agendado')) {
                    // Cancelar o agendamento
                    horarioDiv.classList.remove('agendado');
                    horarioDiv.querySelector('p').textContent = 'Disponível';
                    this.textContent = 'Agendar';
                    this.classList.remove('cancelar');
                    alert(`Agendamento para ${horarioTime} cancelado.`);
                } else {
                    // Agendar
                    horarioDiv.classList.add('agendado');
                    horarioDiv.querySelector('p').textContent = 'Agendado';
                    this.textContent = 'Cancelar Agendamento';
                    this.classList.add('cancelar');
                    alert(`Horário ${horarioTime} agendado para ${dia}`);
                }
            } else {
                alert('Por favor, escolha um dia da semana.');
            }
        });
    });
</script>

</body>
</html>
