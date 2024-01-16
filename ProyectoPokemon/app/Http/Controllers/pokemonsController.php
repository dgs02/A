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

    public function guardarPokemon(Request $request)
    {
        $pokemonsNuevo = new pokemons;
        $pokemonsNuevo->name = $request->name;
        $pokemonsNuevo->type = $request->type;
        $pokemonsNuevo->subtype = $request->subtype;
        $pokemonsNuevo->region = $request->region;
        $pokemonsNuevo->save();

        // Puedes cambiar 'nombre_de_la_vista' al nombre de la vista a la que deseas redirigir
        return redirect()->route('listar')->with('mensaje', 'Nota agregada exitosamente');
    }

    // Método para mostrar el formulario de edición
    public function mostrarEditar($id)
    {
        $pokemon = pokemons::find($id);

        if (!$pokemon) {
            return redirect()->route('listar')->with('error', 'Pokémon no encontrado');
        }

        return view('editar', compact('pokemon'));
    }

    // Método para actualizar el Pokémon
    public function actualizar(Request $request, $id)
    {
        // Validación de datos aquí si es necesario

        $pokemon = pokemons::find($id);

        if (!$pokemon) {
            return redirect()->route('listar')->with('error', 'Pokémon no encontrado');
        }

        // Actualizar los campos del Pokémon con los datos del formulario
        $pokemon->name = $request->input('name');
        $pokemon->type = $request->input('type');
        $pokemon->subtype = $request->input('subtype');
        $pokemon->region = $request->input('region');
        $pokemon->save();

        return redirect()->route('listar')->with('mensaje', 'Pokémon actualizado correctamente');
    }


    // Método para borrar un Pokémon
    public function borrar($id)
    {
        $pokemon = pokemons::find($id);

        if (!$pokemon) {
            return redirect()->route('listar')->with('error', 'Pokémon no encontrado');
        }

        $pokemon->delete();

        return redirect()->route('listar')->with('mensaje', 'Pokémon eliminado correctamente');
    }
}

