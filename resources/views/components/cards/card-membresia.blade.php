@props(['membresia', 'valorMensual'])

<div class="bg-white rounded-lg shadow-xl p-8 relative {{$membresia->tipo == 'anual' ? 'border-4 border-gym-accent' : ''}} transform hover:scale-105 transition-transform duration-300">
    <div class="text-center mb-6">
        <h3 class="text-xl font-bold text-gym-primary mb-2">Membresía {{$membresia->tipo}}</h3>
        <div class="text-4xl font-bold text-gym-primary mb-2">${{number_format($membresia->precio, 0, ',', '.') }}</div>
        <p class="text-gray-600">Pago {{$membresia->tipo}}</p>
        <div class="mt-2">
            @if ($membresia->tipo == 'mensual')
                
                <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-sm font-medium">
                    Sin descuento
                </span>
            
            @else
                <span class="{{$membresia->tipo == 'anual' ? 'bg-green-100 text-green-600' : 'bg-blue-100 text-blue-600'}} px-3 py-1 rounded-full text-sm font-medium">
                    Ahorra ${{ number_format($valorMensual - ($membresia->precio / $membresia->duracion_meses), 0, ',', '.') }}/mes
                </span>
            @endif
        </div>
    </div>

    <div class="mb-6">
        <p class="text-gray-600 mb-4">Acceso completo a todas las instalaciones y clases</p>
        <ul class="space-y-3">
            <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd">
                    </path>
                </svg>
                <span class="text-gray-700">Acceso ilimitado al gimnasio</span>
            </li>
            <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-700">Todas las clases grupales</span>
            </li>
            <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-700">Acceso a vestuarios y duchas</span>
            </li>
            <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-700">Asesoramiento inicial</span>
            </li>
            <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="text-gray-700">App de seguimiento</span>
            </li>
        </ul>
    </div>

    @if (auth()->check() && auth()->user()->membresiaUsuario && auth()->user()->membresiaUsuario->membresia_id == $membresia->id)
        <div class="absolute top-4 right-4 bg-green-100 text-green-800 px-3 py-1 rounded-full text-xs font-medium">
            Plan actual
        </div>
    @else
        
        {{-- Creo el formulario para seleccionar la membresia --}}

        <form action="{{ route('membresia-usuario.store') }}" method="POST">
            @csrf
            <input type="hidden" name="membresia_id" value="{{ $membresia->id }}">
            <button
                class="w-full {{$membresia->tipo == 'anual' ? 'bg-gym-accent hover:bg-gym-accent-dark' : 'bg-gym-secondary hover:bg-gym-primary '}} text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-300">
                Seleccionar Plan
            </button>

        </form>
    @endif

    
    
</div>
