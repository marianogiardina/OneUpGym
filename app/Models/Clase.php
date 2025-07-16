<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Clase extends Model
{
    /** @use HasFactory<\Database\Factories\ClaseFactory> */
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'nombre',
        'descripcion',
        'dia',
        'hora',
        'cantidad_maxima_alumnos',
        'user_id', // ID del profesor
    ];

    protected $casts = [
        'hora' => 'datetime:H:i:s',
    ];

    public function inscriptos()
    {
        return $this->belongsToMany(
            User::class, 
            'clase_usuarios', 
            'clase_id', 
            'usuario_id' 
            
        );
    }

    public function estaCompleta(): bool
    {
        return $this->inscriptos()->count() >= $this->cantidad_maxima_alumnos;
    }

    public function lugaresDisponibles(): int
    {
        return $this->cantidad_maxima_alumnos - $this->inscriptos()->count();
    }

}
