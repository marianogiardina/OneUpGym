<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MembresiaUsuario extends Model
{
    protected $fillable = [
        'user_id',
        'membresia_id',
        'fecha_inicio',
        'fecha_fin',
        'activo',
    ];

    //Casteo los atributos para utilziarlos con el formato correcto
    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin' => 'date',
        'activo' => 'boolean',
    ];

    /**
     * Indico que esta clase le peretenece a un usuario.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    
    } 
    
    /**
     * Indico que esta clase le pertenece a una membresia.
     */
    public function membresia()
    {
        return $this->belongsTo(Membresia::class);
    }

    //Metodo para saber si la membresia del usuario esta activa

    public function membresiaActiva()
    {
        return $this->fecha_fin->lessThanOrEqualTo(now()) ? false : true;
        
    }
}
