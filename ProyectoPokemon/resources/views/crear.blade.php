@extends('auth.template')

@section('content')
<section class="container col-md-6 text-white">
    <form action="{{ route('guardar.pokemon') }}" method="POST" class="container mt-5">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo:</label>
            <select name="type" class="form-select">
                @foreach(['Grass', 'Fire', 'Water', 'Electric', 'Psychic'] as $type)
                    <option value="{{ $type }}">{{ $type }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="subtype" class="form-label">Subtipo:</label>
            <select name="subtype" class="form-select">
                @foreach(['Flying', 'Poison', 'Dragon', 'Steel', 'Ice'] as $subtype)
                    <option value="{{ $subtype }}">{{ $subtype }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="region" class="form-label">Región:</label>
            <select name="region" class="form-select">
                @foreach(['Kanto', 'Johto', 'Hoenn', 'Sinnoh', 'Unova'] as $region)
                    <option value="{{ $region }}">{{ $region }}</option>
                @endforeach
            </select>
        </div>

        <!-- Agregar campos similares para type, subtype y region -->

        <button type="submit" class="btn btn-primary">Guardar Pokémon</button>
    </form>
</section>

@endsection
