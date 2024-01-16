<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('guardar.pokemon') }}" method="POST">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" name="name" required>

        <label for="type">Tipo:</label>
        <input type="text" name="type">

        <label for="subtype">subtipo:</label>
        <input type="text" name="subtype" >

        <label for="region">Region</label>
        <input type="text" name="region" >

        <button type="submit">Guardar Pokémon</button>
    </form>
</body>
</html>
