<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    public $table = 'peliculas';
	protected $fillable = [
        'titulo',
        'nombre_director',
        'ano',
        'nombre_genero'
        ];

    public function getTodos() {
        $ar = Pelicula::all();
	    $ar1 = $ar->toArray();
		return $ar1;
	}

    public function genero() 
	{
		return $this->belongsTo('App\Models\Genero');
	}

    public function director()
	{
		return $this->hasOne('App\Models\Director');
	}

    
}
