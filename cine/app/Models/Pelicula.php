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
    protected $keyType = 'string';
    protected $primaryKey = 'titulo';

    public function genero() 
	{
		return $this->belongsTo('App\Models\Genero', 'nombre', 'nombre_genero');
	}

    public function director()
	{
		return $this->hasOne('App\Models\Director', 'nombre','nombre_director');
	}

    
}
