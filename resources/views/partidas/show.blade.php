<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content="width-decide-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <tittle>Ver uma partida</tittle>
</head>
<body>
    <label for="">Data</label> <br />
    <input type="date" name="Data" value="{{ $partidas->data }}"> <br />
    <label for="">Horario de Inicio</label> <br />
    <input type="text" name="horario_inicio" value="{{ $partidas->horario_inicio }}"> <br />
    <label for="">Hora de Termino</label> <br />
    <input type="text" name="horario_termino" value="{{ $partidas->horario_inicio }}"> <br /> 
    <label for="">Time Casa</label> <br />
    <input type="text" name="time_casa" value="{{ $partidas->time_casa }}"> <br />
    <label for="">Time Visitante</label> <br />
    <input type="text" name="time_visitante" value="{{ $partidas->time_visitante }}"> <br />
    <label for="">Gols Time Casa</label> <br />
    <input type="text" name="gols_time_casa" value="{{ $partidas->gols_time_casa }}"> <br />
    <label for="">Gols Time Visitante</label> <br />
    <input type="text" name="gols_time_visitante" value="{{ $partidas->gols_time_visitante }}"> <br />
</body>
</html>