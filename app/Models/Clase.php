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
}
