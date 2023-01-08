<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class moviesController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()//Aquí va la logica del método. La lógica la controla el controlador.
    {   
        /*Antes del devolver la view se hace la logica del metodo. Por ejemplo si se quiere hacer
         una conexion con una base de datos, una suma, o lo que sea. Cualquier cosa que se haga 
         se hace aquí, antes de la vista y luego se retorna la vista*/
        
         /*$movies= [ Array bidimensional.
            ["Spiderman", 120, "Netflix"],
            ["Spiderwoman", 120, "Netflix"],
            ["Señor de los anillos", 120, "HBO"],
            ["Cars", 120, "Disney Plus"],
        ];*/

        $movies= ["Spiderman","Spiderwoman","Señor de los anillos","Cars"]; //Array unidimensional

        //mandamos el array $movies a la vista
        return view ('movies/index',
            ['movies' => $movies]);/*Devuelveme la vista de movies.El array $movies
             se va a enviar a la vista con el nombre movies*/ 
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
