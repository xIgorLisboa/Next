<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content="width-decide-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <tittle>Cadastrar uma nova partida</tittle>
</head>
<body>
    <form action="{{ route('registrar_partidas') }}" method="POST">
        @csrf
        <label for="">Data</label> <br />
        <input type="date" name="data"> <br />
        <label for="">Hora de Inicio</label> <br />
        <input type="text" name="horario_inicio"> <br />
        <label for="">Hora de Termino</label> <br />
        <input type="text" name="horario_termino"> <br />
        <label for="">Time Casa</label> <br />
        <input type="text" name="time_casa"> <br />
        <label for="">Time Visitante</label> <br />
        <input type="text" name="time_visitante"> <br />
        <label for="">Gols Time Casa</label> <br />
        <input type="text" name="gols_time_casa"> <br />
        <label for="">Gols Time Visitante</label> <br />
        <input type="text" name="gols_time_visitante"> <br />
        <button>Salvar</button>
    </form>
</body>
</html>