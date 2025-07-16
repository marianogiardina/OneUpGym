<div>
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gym-primary mb-2">Mis Clases</h2>
        <p class="text-gray-600">
            {{ $profesor ? 'Proximas clases' : 'Clases a las que estás inscripto' }}
        </p>
    </div>

    <div class="space-y-6">
        @if ($clasesUsuario->isEmpty())
            <p class="text-gray-500">{{ $profesor ? 'No tienes clases asignadas por el momento' : 'No tienes clases inscriptas' }}</p>
        @else
            {{$clasesUsuario->links()}}
            @foreach ($clasesUsuario as $clase)
                <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <h3 class="text-xl font-semibold text-gym-primary mb-2">{{$clase->nombre}}</h3>
                        </div>
                        @if (!$profesor)
                        
                            <livewire:btn-inscripcion :clase="$clase" :key="'btn-inscripcion-' . $clase->id" />

                        @endif
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            {{ucfirst($clase->dia)}} 
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $clase->hora->format('H:i') }} Hs
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                            {{$clase->inscriptos->count()}}/{{$clase->cantidad_maxima_alumnos }} cupos
                        </div>
                    </div>
                    @if (!$profesor)
                    
                        <div class="mt-4 pt-4 border-t border-gray-100">
                            <p class="text-sm text-gray-600">
                                <span class="font-medium">Profesor:</span> {{$clase->user->name}}{{" ".$clase->user->lastname}}
                            </p>
                        </div>
                        
                    @endif
                </div>
            @endforeach
        @endif
    </div>
</div>