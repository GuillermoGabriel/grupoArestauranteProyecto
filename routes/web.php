<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\BebidaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MenuController;

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

Route::resource('/categoria',CategoriaController::class);

Route::resource('/platos',PlatoController::class);

Route::resource('/bebidas',BebidaController::class);

Route::resource('/clientes',ClienteController::class);

Route::resource('/menu',MenuController::class);

