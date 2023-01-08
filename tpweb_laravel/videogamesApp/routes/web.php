<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideogamesController; //Hay que importar el controlador.
use App\Http\Controllers\CompaniesController;//Hay que importar el controlador.

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

Route:: get('/videogames', [VideogamesController::class, 'index']);
/*Cuando se vaya a la ruta /videogames coja del controlador VideogamesControler 
 el metodo index. Hay que importar tambien arriba el controlador*/

 Route::get ('/companies', [CompaniesController::class, 'index']);