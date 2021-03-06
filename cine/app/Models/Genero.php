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
    protected $keyType = 'string';
    protected $primaryKey = 'nombre';
    public $incrementing = false;
    public $timestamps = false;


    public function peliculas()
	{
		return $this->hasMany('App\Models\Pelicula', 'nombre_genero', 'nombre');
	}
}
