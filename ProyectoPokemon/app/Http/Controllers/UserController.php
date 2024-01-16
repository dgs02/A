<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function mostrarRegister()
    {
        return view('register');
    }
    public function guardarUser(Request $request)
    {

        $hashdopassword= Hash::make($request->password);

        $userNuevo = new User;
        $userNuevo->name = $request->name;
        $userNuevo->username = $request->username;
        $userNuevo->password = $hashdopassword;
        $userNuevo->email = $request->email;
        $userNuevo->save();



        // Puedes cambiar 'nombre_de_la_vista' al nombre de la vista a la que deseas redirigir
        return redirect()->route('listar')->with('mensaje', 'Usuario agragado');
    }
}
