<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content="width-decide-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <tittle>Excluir uma partida</tittle>
</head>
<body>
    <form action="{{ route('excluir_partidas', ['id' => $Partida->id]) }}" method="POST">
        @csrf
        <label for="">Tem certeza que deseja excluir esta partida?</label> <br />
        <input type="date" name="data" value="{{ $Partida->data }}"> <br />
        <input type="text" name="horario_inicio" value="{{ $Partida->horario_inicio }}"> <br />
        <input type="text" name="horario_termino" value="{{ $Partida->horario_inicio }}"> <br /> 
        <input type="text" name="time_casa" value="{{ $Partida->time_casa }}"> <br />
        <input type="text" name="time_visitante" value="{{ $Partida->time_visitante }}"> <br />
        <input type="text" name="gols_time_casa" value="{{ $Partida->gols_time_casa }}"> <br />
        <input type="text" name="gols_time_visitante" value="{{ $Partida->gols_time_visitante }}"> <br />
        <button>Sim</button>
</body>
</html>