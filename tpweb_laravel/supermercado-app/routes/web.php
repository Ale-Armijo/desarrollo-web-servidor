<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController; //Hay que importar el controlador.
use App\Http\Controllers\CategoriasController; //Hay que importar el controlador.
use App\Http\Controllers\ClientesController; //Hay que importar el controlador.


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

Route::get('/productos', [ProductosController::class, 'index']);

Route::get('/categorias', [CategoriasController::class, 'index']);//Ruta de categorias.

Route::get('/clientes', [ClientesController::class, 'index']);//Ruta de clientes
