<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;
    public $table = 'generos';
	protected $fillable = [
        'nombre',
        'descripcion',
        ];


    public function peliculas()
	{
		return $this->hasMany('App\Models\Pelicula', 'nombre_genero', 'nombre');
	}
}
