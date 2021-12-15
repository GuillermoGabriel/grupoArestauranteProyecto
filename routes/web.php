<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\BebidaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\CategoriBebidaController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/categoria',CategoriaController::class)->middleware(['auth']);

Route::resource('/categoriabebida',CategoriBebidaController::class)->middleware(['auth']);

Route::resource('/platos',PlatoController::class)->middleware(['auth']);

Route::resource('/bebidas',BebidaController::class)->middleware(['auth']);

Route::resource('/clientes',ClienteController::class)->middleware(['auth']);

Route::resource('/menu',MenuController::class)->middleware(['auth']);

Route::resource('/registrarventa',VentaController::class)->middleware(['auth']);