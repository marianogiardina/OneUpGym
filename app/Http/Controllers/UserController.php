<?php

namespace App\Http\Controllers;

use App\Enums\RolEnum;
use Illuminate\Http\Request;
use App\Models\Membresia;
use App\Models\User;

class UserController extends Controller
{
    public function index() {}

    public function adminUsuarios()
    {
        $users = User::select('id', 'name', 'lastname', 'email', 'rol', 'fecha_nacimiento', 'created_at', 'celular', 'peso', 'altura')
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('dashboard.admin-clientes', compact('users'));
    }

    public function adminProfesores()
    {
        $profesores = User::select('id', 'name', 'lastname', 'email', 'rol', 'fecha_nacimiento', 'created_at', 'celular', 'peso', 'altura')
            ->where('rol', RolEnum::PROFESOR)
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('dashboard.admin-profesores', compact('profesores'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'fecha_nacimiento' => 'required|date',
            'celular' => 'nullable|string|max:20',
            'peso' => 'nullable|numeric',
            'altura' => 'nullable|numeric',
            'rol' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'celular' => $request->celular,
            'peso' => $request->peso,
            'altura' => $request->altura,
            'rol' => $request->rol,
        ]);

        // Redirección condicional según el rol
        switch ((int) $request->rol) {
            case RolEnum::PROFESOR->value:
                return redirect()->route('dashboard.admin.profesores')->with('success', __('Profesor creado exitosamente.'));
            case RolEnum::USER->value:
            default:
                return redirect()->route('dashboard.admin.clientes')->with('success', __('Usuario creado exitosamente.'));
        }

        //return redirect()->route('dashboard.admin.clientes')->with('success', __('Usuario creado exitosamente.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Membresia $membresia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('usuarios.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'fecha_nacimiento' => 'required|date',
            'celular' => 'nullable|string|max:20',
            'peso' => 'nullable|numeric',
            'altura' => 'nullable|numeric',
            'rol' => 'required',
        ]);

        $user->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'celular' => $request->celular,
            'peso' => $request->peso,
            'altura' => $request->altura,
            'rol' => $request->rol,
        ]);

        // Redirección condicional según el rol
        switch ((int) $request->rol) {
            case RolEnum::PROFESOR->value:
                return redirect()->route('dashboard.admin.profesores')->with('success', __('Profesor actualizado exitosamente.'));
            case RolEnum::USER->value:
            default:
                return redirect()->route('dashboard.admin.clientes')->with('success', __('Usuario actualizado exitosamente.'));
        }

        //return redirect()->route('dashboard.admin.clientes')->with('success', __('Usuario actualizado exitosamente.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        // Redirección condicional según el rol
        switch ( $user->rol->value) {
            case RolEnum::PROFESOR->value:
                return redirect()->route('dashboard.admin.profesores')->with('success', __('Profesor eliminado exitosamente.'));
            case RolEnum::USER->value:
            default:
                return redirect()->route('dashboard.admin.clientes')->with('success', __('Usuario eliminado exitosamente.'));
        }

        //return redirect()->route('dashboard.admin.clientes')->with('success', __('Usuario eliminado exitosamente.'));
    }
}
