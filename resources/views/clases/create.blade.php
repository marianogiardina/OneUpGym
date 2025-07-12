<x-custom.template>
    <div class="container mx-auto lg:px-12 p-10 mt-20">
        <div class="m-auto">
            <div class="max-w-xl p-2 m-auto">
                <h1 class="text-2xl font-bold text-gray-900">Agregar Nueva Clase</h1>
                <p class="text-gray-600 text-s">Completa el formulario para agregar una nueva clase al gimnasio.
                </p>
            </div>
        </div>

        <form action="{{ route('clases.store') }}" method="POST"
            class="space-y-5 max-w-xl bg-white p-8 rounded-xl shadow-lg m-auto">
            @csrf
            {{-- Nombre --}}
            <div>
                <label for="nombre" class="block mb-1 text-sm font-semibold text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary"
                    placeholder="Spinning">
            </div>

            {{-- Descripción --}}
            <div>
                <label for="descripcion" class="block mb-1 text-sm font-semibold text-gray-700">Descripción</label>
                <textarea id="descripcion" rows="3" name="descripcion"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary"
                    placeholder="Descripción de la clase"></textarea>
            </div>

            {{-- Tipo --}}
            {{--             <div>
                <label for="tipo" class="block mb-1 text-sm font-semibold text-gray-700">Tipo</label>
                <select id="tipo"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary">
                    <option selected>Seleccioná una opción</option>
                    <option value="spinning">Spinning</option>
                    <option value="yoga">Yoga</option>
                    <option value="funcional">Funcional</option>
                </select>
            </div> --}}



            {{-- Fecha Hora inicio --}}
            <div>
                <label for="fecha_hora_inicio" class="block mb-1 text-sm font-semibold text-gray-700">Fecha y Hora de
                    Inicio</label>
                <input type="datetime-local" id="fecha_hora_inicio" name="fecha_hora_inicio"
                    value="{{ now()->format('Y-m-d\TH:i') }}"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary">
            </div>
            {{-- Capacidad --}}
            <div>
                <label for="capacidad" class="block mb-1 text-sm font-semibold text-gray-700">Cantidad maxima de
                    alumnos</label>
                <input type="number" id="capacidad" name="capacidad"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary"
                    placeholder="7">
            </div>

            {{-- Profesor --}}
            <div>
                <label for="profesor" class="block mb-1 text-sm font-semibold text-gray-700">Profesor</label>
                <select id="profesor" name="profesor_id"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary">
                    <option selected>Seleccioná un profesor</option>
                    <option value="1">Juan López</option>
                    <option value="2">Ana García</option>
                </select>
            </div>

            {{-- Duración --}}
            {{-- <div>
                <label for="duracion" class="block mb-1 text-sm font-semibold text-gray-700">Duración</label>
                <input type="text" id="duracion"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary"
                    placeholder="60 min" >
            </div> --}}

            {{-- Sala --}}
            {{-- <div>
                <label for="sala" class="block mb-1 text-sm font-semibold text-gray-700">Sala</label>
                <select id="sala"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary">
                    <option selected>Sala de Spinning</option>
                    <option value="sala1">Sala 1</option>
                    <option value="sala2">Sala 2</option>
                </select>
            </div> --}}

            {{-- Días --}}
            {{-- <div>
                <label class="block mb-1 text-sm font-semibold text-gray-700">Día</label>
                <div class="grid grid-cols-4 gap-2">
                    @foreach (['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'] as $dia)
                        <button type="button"
                            class="px-4 py-2 text-sm border border-gray-300 rounded-full text-gray-700 bg-gray-100 hover:bg-gym-primary hover:text-white font-semibold focus:outline-none focus:ring-2 focus:ring-gym-primary transition">
                            {{ $dia }}
                        </button>
                    @endforeach
                </div>
            </div> --}}

            {{-- Hora --}}
            {{-- <div>
                <label for="hora" class="block mb-1 text-sm font-semibold text-gray-700">Hora</label>
                <select id="hora" name="hora"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary">
                    <option value="">--:--</option>
                    @for ($h = 0; $h < 24; $h++)
                        <option value="{{ sprintf('%02d:00', $h) }}">{{ sprintf('%02d:00', $h) }}</option>
                    @endfor
                </select>
            </div> --}}

            {{-- Estado --}}
            {{-- <div>
                <label for="estado" class="block mb-1 text-sm font-semibold text-gray-700">Estado</label>
                <select id="estado"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary">
                    <option value="1">Activa</option>
                    <option value="0">Inactiva</option>
                </select>
            </div> --}}

            {{-- Botones --}}
            <div class="flex justify-end gap-3 pt-2">
                <button type="reset"
                    class="text-gray-700 bg-gray-200 hover:bg-gray-300 px-5 py-2.5 rounded-lg text-sm font-medium transition">
                    Cancelar
                </button>
                <button type="submit"
                    class="text-white bg-gym-primary hover:bg-gym-primary/90 px-5 py-2.5 rounded-lg text-sm font-medium transition">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</x-custom.template>
