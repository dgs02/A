<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('pokemons.crear') }}" method="POST">
        @csrf {{-- Cláusula para obtener un token de formulario al enviarlo --}}
        <input type="text" name="nombre" placeholder="Nombre de la nota" class="form-control mb-2" autofocus>
        <input type="text" name="descripcion" placeholder="Descripción de la nota" class="form-control mb-2">
        <button class="btn btn-primary btn-block" type="submit">
        Crear nueva nota
        </button></form>
</body>
</html>
