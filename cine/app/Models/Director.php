<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    public $table = 'directores';
	protected $fillable = [
        'nombre',
        'pais',
        'fnac',
        'edad'
        ];
    protected $keyType = 'string';
    protected $primaryKey = 'nombre';
    public $incrementing = false;
    public $timestamps = false;


    public function peliculas()
    {
        return $this->hasMany('App\Models\Pelicula', 'nombre_director','nombre');
    }
}
