<div>

    @if (session('success'))
        <x-alerts.success>{{ session('success') }}</x-alerts.success>
    @endif  
    
    @if (session('error'))
        <x-alerts.error>{{ session('error') }}</x-alerts.error>
    @endif  
    
    <div>
        @if (auth()->user()->clases->contains($clase))
            <button wire:click="darDeBajaInscripcion({{$clase->id}})" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                Dar de baja inscripcion
            </button>
    
        @elseif ($clase->estaCompleta())
    
            <button  class="w-full bg-gray-400 text-white font-semibold py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 cursor-not-allowed">
                Clase llena
            </button>
    
        @else
        
            <button wire:click="inscribir({{$clase->id}})" class="w-full bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
            Inscribirse a la clase
            </button>
    
        @endif
        
        
    </div>
</div>
