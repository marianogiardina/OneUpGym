@extends('dashboard.index')

@section('content')
    <section class="min-h-1000 gym-bg flex">

        <div class="container mx-auto lg:px-12 p-10">


            <div class="w-full mb-8 flex align-middle justify-between">


                <div>
                    <h2 class="text-1xl md:text-2xl lg:text-3xl font-bold text-gym-primary leading-tight mb-6">
                        Gestion de Clases
                    </h2>

                    <p class="text-dark text-lg md:text-xl leading-relaxed mb-8 opacity-90">
                        Administra las clases del gimnasio
                    </p>

                </div>


                <div class="flex justify-end mb-4 h-10">
                    {{-- Botón para agregar una nueva clase --}}

                    <x-custom.button href="#">Agregar Clase</x-custom.button>

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
                                <div class="flex items-center">
                                    Descripción
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Fecha y Hora
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Cantidad Maxima Alumnos
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Profesor id
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 w-3">
                                <div class="flex items-center justify-center">
                                    Acciones
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
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
