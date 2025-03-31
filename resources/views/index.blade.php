<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome"><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br>
        <label for="telefone">Telefone:</label><br>
        <input type="telefone" name="telefone" id="telefone"><br>
        <button type="submit">Enviar</button>
    </form>

    <a href="{{ route('users.create') }}">
        <button type="button">Registrar</button>
    </a>
</body>
</html>
