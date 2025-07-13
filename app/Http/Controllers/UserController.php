<?php

namespace App\Http\Controllers;

use App\Enums\RolEnum;
use Illuminate\Http\Request;
use App\Models\Membresia;
use App\Models\User;

class UserController extends Controller
{
        public function index()
    {
    }

    public function adminUsuarios()
    {
        $users = User::select('id', 'name', 'lastname', 'email', 'rol', 'fecha_nacimiento', 'created_at', 'celular', 'peso', 'altura')
            ->orderBy('id', 'asc')
            ->paginate(5);

        return view('dashboard.admin-clientes', compact('users'));
    }

    public function adminProfesores()
    {
        $profesores = User::select('id', 'name', 'lastname', 'email', 'rol', 'fecha_nacimiento','created_at' ,'celular', 'peso', 'altura')
            ->where('rol', RolEnum::PROFESOR)
            ->orderBy('id', 'asc')
            ->paginate(5);

        return view('dashboard.admin-profesores', compact('profesores'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Membresia $membresia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Membresia $membresia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Membresia $membresia)
    {
        //
    }
}
