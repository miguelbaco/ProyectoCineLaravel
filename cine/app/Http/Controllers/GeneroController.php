<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar = Genero::all();
	    return view('generos', ['generos' => $ar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creategenero');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required', 'descripcion' => 'required']);

        Genero::create($request->all());
         
        return redirect()->route('generos.index')
            ->with('success', 'Insertado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $nombre
     * @return \Illuminate\Http\Response
     */
    public function show($nombre)
    {
        $obj = Genero::find($nombre)->peliculas()->get();
        if ($obj === null) {
            return view('error', ['error' => $nombre]);
        }
        return view('generopelis', ['peliculas' => $obj]);
        
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
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genero $genero)
    {
        $genero->delete();
        return redirect()->route('generos.index')
            ->with('success', 'Eliminado con éxito');
    }
}
