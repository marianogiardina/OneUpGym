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
        $clases = Clase::select('id', 'nombre', 'descripcion','fecha_hora_inicio', 'cantidad_maxima_alumnos',  'profesor_id', 'created_at')
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
            'profesor_id' => 'nullable|exists:users,id',
        ]);

        Clase::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'fecha_hora_inicio' => $request->input('fecha_hora_inicio'),
            'cantidad_maxima_alumnos' => $request->input('capacidad'),
            'profesor_id' => $request->input('profesor_id'),
        ]);

        return redirect()->route('dashboard.admin.clases')
            ->with('status', 'Clase creada exitosamente.');
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
        $clase->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'fecha_hora_inicio' => $request->input('fecha_hora_inicio'),
            'cantidad_maxima_alumnos' => $request->input('capacidad'),
            'profesor_id' => $request->input('profesor_id'),
        ]);

        return redirect()->route('dashboard.admin.clases')
            ->with('status', 'Clase actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clase $clase)
    {
        $clase->delete();

        return redirect()->route('dashboard.admin.clases')
            ->with('status', 'Clase eliminada exitosamente.');
    }
}
