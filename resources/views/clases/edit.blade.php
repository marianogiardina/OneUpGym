<x-custom.template>
    <div class="container mx-auto lg:px-12 p-10 mt-20">
        <div class="m-auto">
            <div class="max-w-xl p-2 m-auto">
                <h1 class="text-2xl font-bold text-gray-900">Modificar clase de {{ $clase->nombre }}</h1>
                <p class="text-gray-600 text-s">Completa el formulario para modificar la clase.
                </p>
            </div>
        </div>

        <form action="{{ route('clases.update', $clase) }}" method="POST"
            class="space-y-5 max-w-xl bg-white p-8 rounded-xl shadow-lg m-auto">
            @csrf
            @method('PUT')

            {{-- Nombre --}}
            <div>
                <label for="nombre" class="block mb-1 text-sm font-semibold text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $clase->nombre) }}"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary"
                    placeholder="Spinning">
                @error('nombre')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>






            {{-- Descripción --}}
            <div>
                <label for="descripcion" class="block mb-1 text-sm font-semibold text-gray-700">Descripción</label>
                <textarea id="descripcion" rows="3" name="descripcion"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary"
                    placeholder="Descripción de la clase">{{ old('descripcion', $clase->descripcion) }}</textarea>
                @error('descripcion')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p @enderror </div>

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



                {{-- Día de la clase --}}
                <div>
                    <label for="dia" class="block mb-1 text-sm font-semibold text-gray-700">Día</label>
                    <div>
                        <select name="dia" id="dia"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary">
                            @foreach (['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'] as $dia)
                                <option value="{{ $dia }}"
                                    {{ old('dia', $clase->dia ?? '') === $dia ? 'selected' : '' }}>
                                    {{ ucfirst($dia) }}
                                </option>
                            @endforeach
                        </select>
                        @error('dia')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                {{-- Hora de inicio --}}
                <div>
                    <label for="hora" class="block mb-1 text-sm font-semibold text-gray-700">Hora de inicio</label>
                    <div>
                        <select name="hora" id="hora" required class="border rounded p-2">
                            @for ($h = 10; $h <= 20; $h++)
                                @php
                                    $hora = sprintf('%02d:00:00', $h);
                                @endphp
                                <option value="{{ $hora }}"
                                    {{ old('hora', $clase->hora ?? '') === $hora ? 'selected' : '' }}>
                                    {{ sprintf('%02d:00', $h) }}
                                </option>
                            @endfor
                        </select>
                        @error('hora')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                {{-- Capacidad --}}
                <div>
                    <label for="cantidad_maxima_alumnos" class="block mb-1 text-sm font-semibold text-gray-700">Cantidad maxima de
                        alumnos</label>
                    <input type="number" id="cantidad_maxima_alumnos" name="cantidad_maxima_alumnos"
                        value="{{ old('cantidad_maxima_alumnos', $clase->cantidad_maxima_alumnos) }}" min="1"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary"
                        placeholder="7">
                    @error('cantidad_maxima_alumnos')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Profesor --}}
                <div>
                    <label for="profesor" class="block mb-1 text-sm font-semibold text-gray-700">Profesor</label>
                    <select id="profesor" name="profesor_id"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary">

                        <option value="" {{ old('profesor_id', $clase->user_id ?? '') == '' ? 'selected' : '' }}>
                            Sin asignar
                        </option>

                        @foreach ($profesores as $profesor)
                            <option value="{{ $profesor->id }}"
                                {{ old('profesor_id', $clase->user_id ?? '') == $profesor->id ? 'selected' : '' }}>
                                {{ $profesor->name }} {{ $profesor->lastname }}
                            </option>
                        @endforeach
                    </select>

                    @error('profesor_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
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
