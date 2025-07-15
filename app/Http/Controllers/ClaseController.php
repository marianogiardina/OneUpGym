<?php

namespace App\Http\Controllers;

use App\Enums\RolEnum;
use App\Models\Clase;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $fechaSeleccionada = $request->input('fecha') ?? now()->toDateString();

        $dia = Carbon::parse($fechaSeleccionada)->locale('es')->dayName;

        $clases = Clase::where('dia', $dia)->orderBy('hora')->get();

        return view('calendario.index', compact('clases', 'fechaSeleccionada'));
    }

    public function adminClases()
    {
        $clases = Clase::select('id', 'nombre', 'descripcion', 'dia', 'hora', 'cantidad_maxima_alumnos',  'user_id', 'created_at')
            ->orderBy('id', 'asc')
            ->paginate(5);

        return view('dashboard.admin-clases', compact('clases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $profesores = User::where('rol', RolEnum::PROFESOR->value)
            ->select('id', 'name', 'lastname')
            ->orderBy('name', 'asc')
            ->get();

        return view('clases.create', compact('profesores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:1000',
            'dia' => 'required|in:lunes,martes,miércoles,jueves,viernes,sábado,domingo',
            'hora' => 'required|date_format:H:i:s',
            'capacidad' => 'required|integer|min:1',
            'profesor_id' => 'nullable|exists:users,id',
        ]);

        //dd($request->all());
        // Verificar si ya existe una clase en ese día y hora
        $existe = Clase::where('dia', $request->dia)
            ->where('hora', $request->hora)
            ->exists();

        if ($existe) {
            return back()->withErrors(['hora' => 'Ya existe una clase en ese día y horario.'])->withInput();
        }

        Clase::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'dia' => $request->input('dia'),
            'hora' => $request->input('hora'),
            'cantidad_maxima_alumnos' => $request->input('capacidad'),
            'user_id' => $request->input('profesor_id'),
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
        $profesores = User::where('rol', RolEnum::PROFESOR->value)
            ->select('id', 'name', 'lastname')
            ->orderBy('name', 'asc')
            ->get();

        return view("clases.edit", compact('clase', 'profesores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clase $clase)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:1000',
            'dia' => 'required|in:lunes,martes,miércoles,jueves,viernes,sábado,domingo',
            'hora' => 'required|date_format:H:i:s',
            'capacidad' => 'required|integer|min:1',
            'profesor_id' => 'nullable|exists:users,id',
        ]);

        $existe = Clase::where('dia', $request->dia)
            ->where('hora', $request->hora)
            ->where('id', '!=', $clase->id)
            ->exists();

        if ($existe) {
            return back()->withErrors(['hora' => 'Ya existe una clase en ese día y horario.'])->withInput();
        }

        $clase->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'dia' => $request->dia,
            'hora' => $request->hora,
            'capacidad' => $request->capacidad,
            'user_id' => $request->profesor_id,
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

    public function mostrarClases()
    {
        $clases = Clase::
            orderBy('id', 'asc')
            ->paginate(5);

        return view('clases-usuarios.clases', compact('clases'));
    }
}
