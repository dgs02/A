@extends('auth.template')

@section('content')
<div class="container mt-5 col-md-6 text-white">
    <h2 class="vistoso-title">Editar Pokémon</h2>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('pokemons.actualizar', $pokemon->id) }}" method="post">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" name="name" value="{{ $pokemon->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo:</label>
            <select name="type" class="form-select" required>
                @foreach(['Grass', 'Fire', 'Water', 'Electric', 'Psychic'] as $type)
                    <option value="{{ $type }}" {{ $type === $pokemon->type ? 'selected' : '' }}>{{ $type }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="subtype" class="form-label">Subtipo:</label>
            <select name="subtype" class="form-select" required>
                @foreach(['Flying', 'Poison', 'Dragon', 'Steel', 'Ice'] as $subtype)
                    <option value="{{ $subtype }}" {{ $subtype === $pokemon->subtype ? 'selected' : '' }}>{{ $subtype }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="region" class="form-label">Región:</label>
            <select name="region" class="form-select" required>
                @foreach(['Kanto', 'Johto', 'Hoenn', 'Sinnoh', 'Unova'] as $region)
                    <option value="{{ $region }}" {{ $region === $pokemon->region ? 'selected' : '' }}>{{ $region }}</option>
                @endforeach
            </select>
        </div>

        <!-- Agregar campos similares para type, subtype y region -->

        <button type="submit" class="btn btn-primary">Actualizar Pokémon</button>
    </form>
</div>


@endsection
