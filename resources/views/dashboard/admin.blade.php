{{-- filepath: resources/views/admin-dashboard.blade.php --}}

{{-- Layout del dashboard --}}

<x-custom.template title="Panel de Administración">

    {{-- Sección del panel de administración --}}

    <section class="min-h-1000 gym-bg flex pt-20 ">
        <div class="container mx-auto lg:px-12 p-10">
            <div class="max-w-2xl">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gym-primary leading-tight mb-6">
                    Panel de Administración
                </h1>

                <p class="text-dark text-lg md:text-xl leading-relaxed mb-8 opacity-90">
                    Gestiona profesores, clientes y clases del gimansio
                </p>


            </div>
        </div>
    </section>

    <section class="min-h-1000 gym-bg flex  ">
        <div class="container mx-auto lg:px-12 p-10">
            <div class="flex w-full bg-gray-100 rounded-lg overflow-hidden border border-gray-200">
                <!-- Profesores -->
                <button
                    class="flex-1 flex items-center justify-center py-3 px-4 text-gym-primary hover:bg-gray-200 transition-colors border-none focus:outline-none">
                    <svg class="w-5 h-5 mr-2 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="font-medium text-sm">Profesores</span>
                </button>
                <!-- Clientes (activo) -->
                <button
                    class="flex-1 flex items-center justify-center py-3 px-4 text-gym-primary border-2 border-gym-primary bg-white font-semibold rounded-lg -m-px z-10 focus:outline-none">
                    <svg class="w-5 h-5 mr-2 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m9-4a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span class="font-medium text-sm">Clientes</span>
                </button>
                <!-- Clases -->
                <button
                    class="flex-1 flex items-center justify-center py-3 px-4 text-gym-primary hover:bg-gray-200 transition-colors border-none focus:outline-none">
                    <svg class="w-5 h-5 mr-2 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="font-medium text-sm">Clases</span>
                </button>
            </div>
        </div>
    </section>

    <hr>

    {{-- Fin del layout del dashboard --}}




    <section class="min-h-1000 gym-bg flex">

        <div class="container mx-auto lg:px-12 p-10">


            <div class="max-w-2xl">
                <h2 class="text-1xl md:text-2xl lg:text-3xl font-bold text-gym-primary leading-tight mb-6">
                    Gestion de Clientes
                </h2>

                <p class="text-dark text-lg md:text-xl leading-relaxed mb-8 opacity-90">
                    Administra los clientes del gimansio
                </p>


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
                                    Email
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Teléfono
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Estado Membresia
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Fecha Ingreso
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

                        @foreach ($users as $c)
                            <tr class="">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                    {{ $c->name }} {{ $c->lastname }}

                                </th>
                                <td class="px-6 py-4">
                                    {{ $c->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $c->celular }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $c->status }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $c->created_at->format('d-m-Y') }}
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


        </div>
    </section>

</x-custom.template>
