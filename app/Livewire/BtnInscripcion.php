<?php

namespace App\Livewire;


use Livewire\Component;

class BtnInscripcion extends Component
{
    public $clase;

    public function mount($clase)
    {
        $this->clase = $clase;
    }

    public function inscribir($claseId)
    {
        $user = auth()->user();

        if($user->membresiaUsuario == null) {
            session()->flash('error', 'Debes tener una membresía activa para inscribirte a clases.');
            return;
        }elseif (!$user->membresiaUsuario->membresiaActiva()) {
            session()->flash('error', 'Tu membresia no está activa. Por favor, renueva tu membresia para inscribirte a clases.');
            return;
        }

        $user->clases()->attach($claseId);
        session()->flash('success', 'Te inscribiste correctamente en la clase.');
    }

    public function darDeBajaInscripcion($claseId)
    {
        $user = auth()->user();

        $user->clases()->detach($claseId);
        session()->flash('success', 'Te has desinscripto de la clase.');
    }

    public function render()
    {
        return view('livewire.btn-inscripcion');
    }
}
