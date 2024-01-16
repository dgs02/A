<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Notas desde base de datos</h1>


    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <a href="{{ route('crear') }}" class="btn btn-primary">Crear nuevo Pokémon</a>


    </a>
    <table border="1">

        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>tipo</th>
                <th>subtipo</th>
                <th>region</th>
                <th>Acciones</th>

            </tr>
        </thead>
        @foreach ($pokemons as $pokemon)
            <tr>
                <td>{{ $pokemon->id }}</td>
                <td>{{ $pokemon->name }}</td>
                <td>{{ $pokemon->type }}</td>
                <td>{{ $pokemon->subtype }}</td>
                <td>{{ $pokemon->region }}</td>
                <td>
                    <a href="{{ route('pokemons.editar', ['id' => $pokemon->id]) }}">Editar</a>
                    <!-- Agregar el formulario para el botón de borrado -->
                    <form action="{{ route('pokemons.borrar', ['id' => $pokemon->id]) }}" method="post" style="display:inline">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('¿Estás seguro de borrar este Pokémon?')">Borrar</button>
                    </form>
                </td>

            </tr>
        @endforeach

    </table>
</body>

</html>
