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
