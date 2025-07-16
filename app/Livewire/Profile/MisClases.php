<?php

namespace App\Livewire\Profile;

use App\Enums\RolEnum;
use Livewire\Component;
use Livewire\WithPagination;

class MisClases extends Component
{

    use WithPagination;

    public $usuario;

    public bool $profesor = false;
    
    protected $paginationTheme = 'simple-tailwind';

    public function mount()
    {
        $this->usuario = auth()->user();

        $this->profesor = $this->usuario->rol === RolEnum::PROFESOR;
    }


    public function updatingBusqueda()
    {
        $this->resetPage();
    }


    public function render()
    {
        
        if ($this->profesor) {
            // Para profesores: clases que imparte
            $clasesUsuario = $this->usuario->clasesProfesor()
                ->orderBy('id', 'asc')
                ->paginate(2);
        } else {
            // Para usuarios: clases en las que está inscrito
            $clasesUsuario = $this->usuario->clases()
                ->orderBy('id', 'asc')
                ->paginate(2);
        }

        return view('livewire.profile.mis-clases', [
            'clasesUsuario' => $clasesUsuario,
            'profesor' => $this->profesor
        ]);
    }
}
