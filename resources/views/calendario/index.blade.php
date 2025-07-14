<x-custom.template>

    <section class="p-14">

        <!-- Título y buscador -->
        <div class="container mx-auto py-10 flex flex-col md:flex-row items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gym-primary mb-2">Calendario de Clases</h1>
                <p class="text-gray-600">Consulta nuestras clases disponibles y reserva tu lugar</p>
            </div>
            <div class="mt-4 md:mt-0">
                <form method="GET">
                    <input type="date" name="fecha" value="{{ $fechaSeleccionada }}"
                        class="border rounded p-2 text-sm">
                    <button type="submit"
                        class="ml-2 bg-gym-primary hover:bg-gym-primary-dark text-white px-4 py-2 rounded text-sm">
                        Buscar
                    </button>
                </form>
            </div>
        </div>

        <!-- Lista de clases -->
        <div class="container mx-auto bg-white rounded-lg shadow-md space-y-6">
            <div class="bg-white p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">
                    {{ \Carbon\Carbon::parse($fechaSeleccionada)->translatedFormat('l, j \d\e F \d\e Y') }}
                </h2>

                @forelse($clases as $clase)
                    <div
                        class="flex flex-col md:flex-row md:items-center justify-between border rounded p-4 mb-4 shadow-sm hover:bg-gray-100 cursor-pointer">
                        <div class="mb-2 md:mb-0">
                            <p class="text-lg font-semibold text-gray-800">
                                {{ \Carbon\Carbon::parse($clase->fecha_hora_inicio)->format('H:i') }}
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

        <!-- Información sobre clases -->
        <div class="container mx-auto p-10 lg:px-12 flex flex-col">
            <h2 class="text-2xl font-bold text-gym-primary mb-6">Información sobre las clases</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($clases->unique('nombre') as $clase)
                    <div class="flex items-start">
                        <div>
                            <h3 class="font-semibold text-gym-primary mb-1">{{ $clase->nombre }}</h3>
                            <p class="text-gray-600 text-sm">
                                {{ $clase->descripcion ?? 'Descripción no disponible.' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </section>


</x-custom.template>
