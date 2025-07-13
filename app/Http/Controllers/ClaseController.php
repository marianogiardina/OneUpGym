<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function adminClases()
    {
        $clases = Clase::select('id', 'nombre', 'descripcion','fecha_hora_inicio', 'cantidad_maxima_alumnos',  'user_id', 'created_at')
            ->orderBy('id', 'asc')
            ->paginate(5);

        return view('dashboard.admin-clases', compact('clases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clases.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:1000',
            'fecha_hora_inicio' => 'required|date',
            'capacidad' => 'required|integer|min:1',
            //Cambiar a required cuando se haga la relacion con profesores
            'user_id' => 'nullable|exists:users,id',
        ]);

        Clase::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'fecha_hora_inicio' => $request->input('fecha_hora_inicio'),
            'cantidad_maxima_alumnos' => $request->input('capacidad'),
            'user_id' => $request->input('user_id'),
        ]);

        return redirect()->route('dashboard.admin.clases')
            ->with('success', 'Clase creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clase $clase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clase $clase)
    {
        return view("clases.edit", compact('clase'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clase $clase)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:1000',
            'fecha_hora_inicio' => 'required|date',
            'capacidad' => 'required|integer|min:1',
            //Cambiar a required cuando se haga la relacion con profesores
            'user_id' => 'nullable|exists:users,id',
        ]);

        $clase->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'fecha_hora_inicio' => $request->input('fecha_hora_inicio'),
            'cantidad_maxima_alumnos' => $request->input('capacidad'),
            'user_id' => $request->input('user_id'),
        ]);

        return redirect()->route('dashboard.admin.clases')
            ->with('success', 'Clase actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clase $clase)
    {
        $clase->delete();

        return redirect()->route('dashboard.admin.clases')
            ->with('success', 'Clase eliminada exitosamente.');
    }
}
