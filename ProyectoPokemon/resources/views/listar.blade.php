@extends('auth.template')

@section('content')
    <div class="container mt-5 w-25 text-center">
        <h2 class="vistoso-title">Base Pokemons</h2>

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
    </div>


<div class="d-flex align-items-center justify-content-center">
        <table class="table custom-table mt-3 w-75 ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Subtipo</th>
                    <th scope="col">Región</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pokemons as $pokemon)
                    <tr>
                        <td>{{ $pokemon->id }}</td>
                        <td>{{ $pokemon->name }}</td>
                        <td>{{ $pokemon->type }}</td>
                        <td>{{ $pokemon->subtype }}</td>
                        <td>{{ $pokemon->region }}</td>
                        <td>
                            <a href="{{ route('pokemons.editar', ['id' => $pokemon->id]) }}" class="btn btn-warning btn-sm">Editar</a>
                            <!-- Agregar el formulario para el botón de borrado -->
                            <form action="{{ route('pokemons.borrar', ['id' => $pokemon->id]) }}" method="post" style="display:inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de borrar este Pokémon?')">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>
    <div class="d-flex align-items-center justify-content-center">
    <a href="{{ route('crear') }}" class="btn btn-primary">Crear nuevo Pokémon</a>
</div>
@endsection


