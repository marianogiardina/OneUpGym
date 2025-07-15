<div>
    
    <section class="py-16">
        <div class="container mx-auto px-6 lg:px-12">

            <form class="relative w-full max-w-lg mx-auto mb-8" >
                <x-inputs.search-input wire:model.live.debounce.500ms="busqueda" placeholder="Busca clases por su nombre"></x-inputs.search-input>
            </form>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach ($clases as $clase )
                
                    <div
                        class="bg-white rounded-lg shadow-xl overflow-hidden group hover:shadow-2xl transition-shadow duration-300">
                        {{-- <div
                            class="relative h-64 bg-gradient-to-br from-teal-500 to-teal-700 flex items-center justify-center">
                            <img src="./imgs/natacion.jpg" alt="Natación" class="w-full h-full object-cover">
                        </div> --}}
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-2xl font-bold text-teal-700">{{$clase->nombre}}</h3>
                                <div class="flex items-center space-x-2">
                                    <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">60 min</span>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">
                                {{$clase->descripcion}}
                            </p>
                            <div class="bg-teal-50 rounded-lg p-4 mb-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-sm font-semibold text-teal-800">Horarios de clase</p>
                                        <p class="text-teal-600">{{ucfirst($clase->dia)}}</p>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-sm font-semibold text-teal-800">Hora</p>
                                        <p class="text-teal-600">{{ $clase->hora->format('H') }} Hs - {{ $clase->hora->addHour(1)->format('H') }} Hs</p>
                                    </div>
                                </div>
                            </div>
                            @auth
                                <button class="w-full bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
                                    Inscribirse a la clase
                                </button>
                            @else
                                <a href="{{route('login')}}" class="w-full bg-teal-600 hover:bg-teal-700 text-white font-semibold py-3 px-4 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 block text-center">
                                    Inicia sesión para inscribirte
                                </a>
                            @endauth
                        </div>
                    </div>

                @endforeach
                    
                
            </div>
            <hr class="my-8 border-gray-300">

            {{ $clases->links() }}
        </div>
    </section>
</div>
