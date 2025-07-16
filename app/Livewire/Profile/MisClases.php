<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Livewire\WithPagination;

class MisClases extends Component
{

    use WithPagination;

    public $usuario;
    
    protected $paginationTheme = 'simple-tailwind';

    public function mount()
    {
        $this->usuario = auth()->user();
    }


    public function updatingBusqueda()
    {
        $this->resetPage();
    }


    public function render()
    {

        $clasesUsuario = $this->usuario->clases()->orderBy('id', 'asc')->paginate(2);

        return view('livewire.profile.mis-clases', compact('clasesUsuario'));
    }
}
