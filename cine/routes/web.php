<?php

use Illuminate\Support\Facades\Route;
use App\Models\Director;
use App\Http\Controllers\DirectorController;
use App\Models\Genero;
use App\Http\Controllers\GeneroController;
use App\Models\Pelicula;
use App\Http\Controllers\PeliculaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('directores', DirectorController::class);
Route::resource('generos', GeneroController::class);
Route::resource('peliculas', PeliculaController::class);