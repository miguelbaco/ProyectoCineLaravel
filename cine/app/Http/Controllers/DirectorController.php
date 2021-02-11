<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar = Director::all();
	    return view('directores', ['directores' => $ar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createdirector');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required', 'pais' => 'required', 'fnac' => 'required', 'edad' => 'required']);

        Director::create($request->all());
         
        return redirect()->route('directores.index')
            ->with('success', 'Insertado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nombre)
    {
        $obj = Director::where('nombre',$nombre)->get()[0]->peliculas()->get();
        if ($obj === null) {
            return view('DirectorNoExiste', ['titulo' => $nombre]);
        }
        return view('directorpelis', ['peliculas' => $obj]);
    }

    public function suspeliculas($nombre)
    {
        $obj = Director::where('nombre',$nombre)->get()[0]->peliculas()->get();
        if ($obj === null) {
            return view('DirectorNoExiste', ['titulo' => $nombre]);
        }
        return view('directorpelis', ['peliculas' => $obj]);
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
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {
        $director->delete();
        return redirect()->route('directores.index')
            ->with('success', 'Eliminado con éxito');
    }
}
