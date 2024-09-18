<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos - Estética</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e0e0e0;
        }
        header {
            background-color: #978e8c; 
            color: #333;
            padding: 10px;
            text-align: center;
            position: relative;
            margin-bottom: 20px;
        }
        header img {
            max-height: 270px;
            vertical-align: middle;
        }
        .voltar-button {
            left: 70px;
            padding: 10px;
            font-size: 16px;
            color: white;
            background-color: #555; /* Cinza escuro */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .voltar-button:hover {
            background-color: #444;
            
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .horarios {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .horario {
            width: 230px;
            padding: 40px;
            margin: 20px;
            text-align: center;
            background-color: #978e8c;
            border: 1px solid #ccc;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .horario.agendado {
            background-color: #d0d0d0;
            color: #666;
            cursor: not-allowed;
        }
        .horario h3 {
            margin: 0;
            font-size: 22px;
        }
        .horario p {
            margin: 16px 0;
            font-size: 16px;
        }
        button {
            width: 130px;
            padding: 10px;
            font-size: 15px;
            color: #333;
            background-color: #d3d3d3;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            padding-top: 4px;
        }
        button:disabled {
            background-color: #c0c0c0;
            cursor: not-allowed;
        }
        .cancelar {
            background-color: #dc3545;
            font-size: 12px;
        }
    </style>
</head>
<body>

<header>
    <button class="voltar-button" onclick="window.location.href='index.html';">Voltar</button>
    <img src="imagens/B.png" alt="Logo" />
</header>

<h2>Agendamentos Disponíveis</h2>

<div class="horarios">
    <div class="horario" data-time="10:00">
        <h3>10:00</h3>
        <p>Disponível</p>
        <button>Agendar</button>
    </div>
    <div class="horario" data-time="11:00">
        <h3>11:00</h3>
        <p>Disponível</p>
        <button>Agendar</button>
    </div>
    <div class="horario" data-time="13:00">
        <h3>13:00</h3>
        <p>Disponível</p>
        <button>Agendar</button>
    </div>
    <div class="horario" data-time="14:00">
        <h3>14:00</h3>
        <p>Disponível</p>
        <button>Agendar</button>
    </div>
    <div class="horario" data-time="15:00">
        <h3>15:00</h3>
        <p>Disponível</p>
        <button>Agendar</button>
    </div>
    <div class="horario" data-time="16:00">
        <h3>16:00</h3>
        <p>Disponível</p>
        <button>Agendar</button>
    </div>
    <div class="horario" data-time="17:00">
        <h3>17:00</h3>
        <p>Disponível</p>
        <button>Agendar</button>
    </div>
</div>

<script>
    let agendado = false;

    document.querySelectorAll('.horario button').forEach(button => {
        button.addEventListener('click', function() {
            const horarioDiv = this.parentElement;
            const horarioTime = horarioDiv.dataset.time;

            if (button.textContent === 'Cancelar Agendamento') {
                if (confirm('Tem certeza que deseja cancelar o agendamento?')) {
                    horarioDiv.classList.remove('agendado');
                    horarioDiv.querySelector('p').textContent = 'Disponível';
                    button.textContent = 'Agendar';
                    button.classList.remove('cancelar');
                    button.disabled = false;
                    agendado = false;

                    // Aqui você deve adicionar a lógica para cancelar o agendamento no banco de dados
                    // Exemplo: cancelarAgendamento(horarioTime);
                }
                return;
            }

            if (agendado) {
                alert('Você já tem um horário agendado!');
                return;
            }

            horarioDiv.classList.add('agendado');
            horarioDiv.querySelector('p').textContent = 'Agendado';
            button.textContent = 'Cancelar Agendamento';
            button.classList.add('cancelar');
            button.disabled = false;
            agendado = true;
            alert(`Horário ${horarioTime} agendado`);

            // Aqui você deve adicionar a lógica para agendar no banco de dados
            // Exemplo: agendarHorario(horarioTime);
        });
    });

    function agendarHorario(horario) {
        // Função para enviar o horário agendado para o servidor
        // Você pode usar Fetch API ou XMLHttpRequest para enviar os dados
        fetch('agendar.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ horario }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Horário agendado com sucesso!');
            } else {
                alert('Erro ao agendar o horário.');
            }
        })
        .catch(error => {
            console.error('Erro:', error);
        });
    }

    function cancelarAgendamento(horario) {
        // Função para cancelar o agendamento no servidor
        fetch('cancelar.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ horario }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Agendamento cancelado com sucesso!');
            } else {
                alert('Erro ao cancelar o agendamento.');
            }
        })
        .catch(error => {
            console.error('Erro:', error);
        });
    }
</script>

</body>
</html>
