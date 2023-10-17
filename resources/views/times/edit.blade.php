<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver um time</title>
</head>
<body>
    <form method="POST" action="{{ route('editar_times', ['id' => $time->id]) }}">
        @csrf <!-- Adicione esta linha para incluir o token CSRF -->
        <label for="">Nome</label><br>
        <input type="text" name="nome" value="{{ $time->nome }}"><br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
