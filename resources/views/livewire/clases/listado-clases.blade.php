<div>
    
    <section class="py-16">
        <div class="container mx-auto px-6 lg:px-12">

            <form class="relative w-full max-w-lg mx-auto mb-8" >
                <x-inputs.search-input wire:model.live.debounce.500ms="busqueda" placeholder="Busca clases por su nombre"></x-inputs.search-input>
            </form>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach ($clases as $clase )
                
                    <div class="bg-white rounded-lg shadow-xl overflow-hidden group hover:shadow-2xl transition-shadow duration-300">
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
                                @if (auth()->user()->rol !== App\Enums\RolEnum::PROFESOR)
                                
                                    <livewire:btn-inscripcion :clase="$clase" :key="'btn-inscripcion-' . $clase->id" />

                                @endif
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
