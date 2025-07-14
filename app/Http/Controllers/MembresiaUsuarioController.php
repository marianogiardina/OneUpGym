<?php

namespace App\Http\Controllers;

use App\Models\Membresia;
use App\Models\MembresiaUsuario;
use Illuminate\Http\Request;

class MembresiaUsuarioController extends Controller
{
    
    /**
     * Este controllador tiene un solo metodo store que se encarga de crear una nueva membresia para el usuario autenticado.
     */

    public function store(Request $request)
    {
        $request->validate([
            
            'membresia_id' => 'required|exists:membresias,id',
        ]);

        $membresia_id = $request->input('membresia_id');
        $user = auth()->user();
        $fecha_inicio = now();
        $fecha_fin = now()->addMonths(Membresia::find($membresia_id)->duracion_meses);

        //Si el usuario ya tiene una membresia, la elimino antes de crear una nueva.
        //Esto es para evitar que un usuario tenga varias membresias activas al mismo tiempo.

        if ($user->membresiaUsuario) {
            $user->membresiaUsuario->delete();
        }


        MembresiaUsuario::create([
            'user_id' => $user->id,
            'membresia_id' => $membresia_id,
            'fecha_inicio' => $fecha_inicio,
            'fecha_fin' => $fecha_fin,
            'activo' => true,
        ]);


        return redirect()->route('settings.profile')
        ->with('compro-membresia', 'Se proceso la compra de la membresía correctamente. Tu membresía estará activa desde ' . $fecha_inicio->locale('es')->translatedFormat('j \\d\\e F \\d\\e Y') . ' hasta ' . $fecha_fin->locale('es')->translatedFormat('j \\d\\e F \\d\\e Y') . '.');
    }

}
