<x-custom.template>

    <section class="p-14">

        <!-- Título y buscador -->
        <div class="container mx-auto py-10 flex flex-col md:flex-row items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gym-primary mb-2">Calendario de Clases</h1>
                <p class="text-gray-600">Consulta nuestras clases disponibles y reserva tu lugar</p>
            </div>
            <div class="mt-4 md:mt-0">


                @php
                    $fechaCarbon = \Carbon\Carbon::parse($fechaSeleccionada);
                    $prev = $fechaCarbon->copy()->subDay()->toDateString();
                    $next = $fechaCarbon->copy()->addDay()->toDateString();
                @endphp

                <div class="flex items-center justify-center gap-2 mt-4">
                    <!-- Flecha anterior -->
                    <a href="{{ route('calendario.index', ['fecha' => $prev]) }}"
                        class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-5 h-5 text-gym-primary">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </a>

                    <!-- Formulario de fecha -->
                    <form method="GET" class="flex items-center gap-2 my-0">
                        <input type="date" name="fecha" value="{{ $fechaSeleccionada }}"
                            class="border rounded p-2 text-sm">
                        <button type="submit"
                            class="bg-gym-primary hover:bg-gym-secondary text-white px-4 py-2 rounded text-sm">
                            Buscar
                        </button>
                    </form>

                    <!-- Flecha siguiente -->
                    <a href="{{ route('calendario.index', ['fecha' => $next]) }}"
                        class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-5 h-5 text-gym-primary">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>


            </div>
        </div>

        <!-- Lista de clases -->
        <div class="container mx-auto bg-white rounded-lg shadow-md space-y-6">
            <div class="bg-white p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">
                    {{ \Carbon\Carbon::parse($fechaSeleccionada)->locale('es')->translatedFormat('l, j \d\e F \d\e Y') }}
                </h2>

                @forelse($clases as $clase)
                    <div
                        class="flex flex-col md:flex-row md:items-center justify-between border rounded p-4 mb-4 shadow-sm hover:bg-gray-100 cursor-pointer">
                        <div class="mb-2 md:mb-0">
                            <p class="text-lg font-semibold text-gray-800">

                                {{ \Carbon\Carbon::createFromFormat('H:i:s', $clase->hora)->format('H:i') }}
                                - {{ $clase->nombre }}
                            </p>
                            <p class="text-sm text-gray-600">{{ $clase->descripcion }}</p>
                            <p class="text-sm text-gray-600">Máx. Alumnos: {{ $clase->cantidad_maxima_alumnos }}</p>
                        </div>
                        <span
                            class="text-sm px-3 py-1 rounded
                    {{ $clase->cantidad_maxima_alumnos == 0 ? 'bg-gray-300 text-gray-700' : 'bg-green-100 text-green-600' }}">
                            {{ $clase->cantidad_maxima_alumnos == 0 ? 'Clase llena' : 'Disponible' }}
                        </span>
                    </div>
                @empty
                    <p class="text-gray-500">No hay clases disponibles para esta fecha.</p>
                @endforelse
            </div>
        </div>

        {{-- <!-- Información sobre clases -->
        <div class="container mx-auto p-10 lg:px-12 flex flex-col">
            <h2 class="text-2xl font-bold text-gym-primary mb-6">Información sobre las clases</h2>

            <div class="bg-white rounded-lg shadow-sm p-6">
                <ul class="space-y-4">
                    @foreach ($clases->unique('nombre') as $clase)
                        <li class="flex items-start">
                            <div class="mt-1 w-3 h-3 rounded-full bg-gym-primary mr-3 flex-shrink-0"></div>
                            <div>
                                <h3 class="text-base font-semibold text-gray-800">{{ $clase->nombre }}</h3>
                                <p class="text-sm text-gray-600">
                                    {{ $clase->descripcion ?? 'Descripción no disponible.' }}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div> --}}


    </section>


</x-custom.template>
