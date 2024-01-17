<?php

use App\Http\Controllers\pokemonsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () {
    return view('auth.dashboard');
})->middleware('auth');

Route::get('listar', [ pokemonsController::class, 'pokemons' ])->name('listar');

Route::get('crear', [pokemonsController::class, 'mostrarCrear'])->name('crear');
Route::post('guardar-pokemon', [pokemonsController::class, 'guardarPokemon'])->name('guardar.pokemon');

// Nueva ruta para mostrar el formulario de edición
Route::get('editar/{id}', [pokemonsController::class, 'mostrarEditar'])->name('pokemons.editar');
// Ruta para actualizar el Pokémon
Route::put('editar/{id}', [pokemonsController::class, 'actualizar'])->name('pokemons.actualizar');

// Nueva ruta para el borrado
Route::delete('borrar/{id}', [pokemonsController::class, 'borrar'])->name('pokemons.borrar');


