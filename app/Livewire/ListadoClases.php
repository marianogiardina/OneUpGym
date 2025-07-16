<?php

namespace App\Livewire;

use App\Models\Clase;
use Livewire\Component;
use Livewire\WithPagination;

class ListadoClases extends Component
{

    use WithPagination;

    public $busqueda;


    public function mount()
    {
        $this->busqueda = '';
    }


    public function updatingBusqueda()
    {
        $this->resetPage();
    }

    public function render()
    {

        $busqueda = $this->busqueda;


        $clases = Clase::orderBy('id', 'asc')
            ->when($busqueda, function ($query) use ($busqueda) {
                $query->where('nombre', 'like', "%$busqueda%");
            })
            ->paginate(4);
            

        return view('livewire.clases.listado-clases', compact('clases'));
    }
}
