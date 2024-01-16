<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Encabezado de la página -->
</head>

<body>

    <h1>Editar Pokémon</h1>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('pokemons.actualizar', $pokemon->id) }}" method="post">
        @csrf
        @method('put')

        <!-- Campos del formulario para editar -->
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ $pokemon->name }}" required>

        <label for="type">Tipo:</label>
        <input type="text" name="type" value="{{ $pokemon->type }}" required>

        <label for="subtype">Subtipo:</label>
        <input type="text" name="subtype" value="{{ $pokemon->subtype }}" required>

        <label for="region">Region:</label>
        <input type="text" name="region" value="{{ $pokemon->region }}" required>

        <!-- Agrega campos similares para type, subtype y region -->

        <button type="submit">Actualizar Pokémon</button>
    </form>

</body>

</html>
