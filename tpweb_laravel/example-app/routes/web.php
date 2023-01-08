<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\moviesController;//Tenemos que importamos el controlador. La A debe ser mayuscula


Route::get('/', function () {//Cuando vamos a la ruta / url raiz con localhost se va a devorlver la vista welcome
    return view('welcome');
});

/*
Route::get ('/movies', function(){//Cuando se acceda a la url movies se nos muestre la vista movies.
    return view('movies/index');
});
*/
//En vez de retornar directamente la vista vamos a invocar al controlador.
//Invocamos al controlador.

Route:: get('/movies', [moviesController::class,'index']);
/*Invocamos a moviesController y su funcion index.
No olvidar importar el controller arriba*/