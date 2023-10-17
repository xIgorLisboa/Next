<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content="width-decide-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <tittle>Excluir um Jogador</tittle>
</head>
<body>
    <form action="{{ route('excluir_jogador', ['id' => $jogador->id]) }}" method="POST">
        @csrf
        <label for="">Tem certeza que deseja excluir este jogador?</label> <br />
        <input type="text" name="Nome" value="{{ $jogador->nome }}"> <br />
        <input type="text" name="Numero Camisa" value="{{ $jogador->numero_camiseta }}"> <br />
        <button>Sim</button>
</body>
</html>