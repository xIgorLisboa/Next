<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content="width-decide-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <tittle>Excluir um time</tittle>
</head>
<body>
    <form action="{{ route('excluir_times', ['id' => $time->id]) }}" method="POST">
        @csrf
        <label for="">Tem certeza que deseja excluir este time?</label> <br />
        <input type="text" name="nome" value="{{ $time->nome }}"> <br />
        <button>Sim</button>
</body>
</html>