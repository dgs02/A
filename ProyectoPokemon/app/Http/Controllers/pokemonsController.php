<?php

namespace App\Http\Controllers;

use App\Models\pokemons;
use Illuminate\Http\Request;

class pokemonsController extends Controller
{
    public function pokemons()
    {
        $pokemons = pokemons::all(); // Nos saca todos los pokemons de la BBDD
        return view('listar', @compact('pokemons'));
    }


        // Otros métodos del controlador...

        public function mostrarCrear()
        {
            return view('crear');
        }

        public function guardarPokemon(Request $request) {
            $pokemonsNuevo = new pokemons;
            $pokemonsNuevo -> name = $request -> name;
            $pokemonsNuevo -> type = $request -> type;
            $pokemonsNuevo -> subtype = $request -> subtype;
            $pokemonsNuevo -> region = $request -> region;
            $pokemonsNuevo -> save();
            return back() -> with('mensaje', 'Nota agregada exitosamente');
           }

}
