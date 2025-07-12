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

        Clase::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'fecha_hora_inicio' => $request->input('fecha_hora_inicio'),
            'cantidad_maxima_alumnos' => $request->input('capacidad'),
            'profesor_id' => $request->input('profesor_id'),
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clase $clase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clase $clase)
    {
        //
    }
}
