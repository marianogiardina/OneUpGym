@extends('dashboard.index')

@section('content')
    <section class="min-h-1000 gym-bg flex">

        <div class="container mx-auto lg:px-12 p-10">

            <div class="w-full flex align-middle justify-between">

                <div>
                    <h2 class="text-lg md:text-xl lg:text-2xl font-bold">Clases</h2>
                </div>

                <div class="flex justify-end mb-4 h-10">
                    {{-- Botón para agregar una nueva clase --}}
                    <x-custom.button href="{{ route('clases.create') }}">Agregar Clase</x-custom.button>
                </div>

            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right ">
                    <thead class="text-xs bg-gym-light-gray">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Descripción
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha y Hora
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Capacidad
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Profesor id
                            </th>
                            <th scope="col" class="px-6 py-3 w-3">
                                <div class="flex items-center justify-center">
                                    Acciones
                                </div>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">

                        @foreach ($clases as $c)
                            <tr class="">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                    {{ $c->nombre }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $c->descripcion }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $c->fecha_hora_inicio }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $c->cantidad_maxima_alumnos }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $c->profesor_id }}
                                </td>
                                <td class="px-6 py-4 flex items-center justify-center space-x-2">
                                    <x-custom.button href="#" class="bg-blue-500">Editar</x-custom.button>
                                    <x-custom.button href="#" class="bg-red-500">Eliminar</x-custom.button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{-- Paginación de los usuarios --}}
                {{ $clases->links() }}
            </div>

        </div>
    </section>
@endsection
