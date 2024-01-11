<?php

namespace App\Http\Controllers;

use App\Models\pokemons;
use Illuminate\Http\Request;

class pokemonsController extends Controller
{
    public function pokemons() {
        $pokemons = pokemons::all(); // Nos saca todos los pokemons de la BBDD
        return view('listar', @compact('pokemons'));
        }


        public function crear(Request $request) {
            $pokemonNuevo = new pokemons;
            $pokemonNuevo -> id = $request -> id;
            $pokemonNuevo -> name = $request -> name;
            $pokemonNuevo -> type = $request -> type;
            $pokemonNuevo -> subtype = $request -> subtype;
            $pokemonNuevo -> region = $request -> region;
            $pokemonNuevo -> save();



            return back() -> with('mensaje', 'Nota agregada exitosamente');
           }
}
