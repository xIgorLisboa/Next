<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta chartset="UTF-8">
    <meta name="viewport" content="width-decide-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <tittle>Ver um jogador</tittle>
</head>
<body>
    <label for="">Nome</label> <br />
    <input type="text" name="nome" value="{{ $jogador->nome }}"> <br />
    <label for="">Numero da Camiseta</label> <br />
    <input type="text" name="numero_camiseta" value="{{ $jogador->numero_camiseta }}"> <br />
    <button>Salvar</button>
</body>
</html>