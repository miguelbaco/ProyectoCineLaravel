<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar = Pelicula::all();
	    return view('peliculas', ['peliculas' => $ar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createpeli');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['titulo' => 'required', 'nombre_director' => 'required', 'ano' => 'required', 'nombre_genero' => 'required']);

        Pelicula::create($request->all());
         
        return redirect()->route('peliculas.index')
            ->with('success', 'Insertado con éxito.');
        /*$u = new Pelicula();
        $u['titulo'] = $request['titulo'];
        $u['nombre_director'] = $request['nombre_director'];
        $u['ano'] = $request['ano'];
        $u['nombre_genero'] = $request['nombre_genero'];
        $u-> save();*/


    }

    /**
     * Display the specified resource.
     *
     * @param  string  $titulo
     * @return \Illuminate\Http\Response
     */
    public function show($titulo)
    {
        $obj = Pelicula::where('titulo',$titulo)->get();
        //$obj = Pelicula::find($titulo)->get();
        if ($obj === null) {
            return view('error', ['titulo' => $titulo]);
        }
        return view('pelicula', ['peliculas' => $obj]);
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
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return redirect()->route('peliculas.index')
            ->with('success', 'Eliminado con éxito');
    }
}
