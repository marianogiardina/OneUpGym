<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    /** @use HasFactory<\Database\Factories\ClaseFactory> */
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_hora_inicio',
        'cantidad_maxima_alumnos',
    ];
}
