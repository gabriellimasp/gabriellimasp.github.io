<!DOCTYPE html>
<html>
<head>
    <title>Relógio</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #clock {
            font-size: 48px;
            text-align: center;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div id="clock">00:00:00</div>

    <script>
        // Função para atualizar o relógio
        function updateClock() {
            var date = new Date();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var seconds = date.getSeconds();
            var timeString = formatTime(hours) + ':' + formatTime(minutes) + ':' + formatTime(seconds);
            document.getElementById("clock").textContent = timeString;
        }

        // Função para formatar o tempo com zero à esquerda se necessário
        function formatTime(time) {
            return (time < 10 ? '0' : '') + time;
        }

        // Atualizar o relógio a cada 4 segundos
        setInterval(updateClock, 4000);

        // Atualizar o relógio imediatamente
        updateClock();
    </script>
</body>
</html>