<?php

use App\Http\Controllers\pokemonsController;
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



Route::get('listar', [ pokemonsController::class, 'pokemons' ])->name('listar');
Route::get('crear', [pokemonsController::class, 'mostrarCrear'])->name('crear');
Route::post('guardar-pokemon', [pokemonsController::class, 'guardarPokemon'])->name('guardar.pokemon');

