@extends('dashboard.index')

@section('content')
    <section class="min-h-1000 gym-bg flex">

        <div class="container mx-auto lg:px-12 p-8">

            @if (session('success'))
                <div class="mb-6">

                    <tr>
                        <td colspan="7" class="px-6 py-4">
                            <div class="bg-green-100 text-green-800 px-4 py-2 rounded-md">
                                {{ session('success') }}
                            </div>
                        </td>
                    </tr>

                </div>
            @endif



            <div class="w-full flex align-middle justify-between">

                <div>
                    <h2 class="text-lg md:text-xl lg:text-2xl font-bold">Profesores</h2>
                </div>

                <div class="flex justify-end mb-4 h-10">
                    {{-- Botón para agregar un nuevo Profesor --}}
                    <x-custom.button href="{{ route('profesores.create') }}">Agregar Profesor</x-custom.button>
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
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Teléfono
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Fecha Ingreso
                            </th>
                            <th scope="col" class="px-6 py-3 w-3">
                                <div class="flex items-center justify-center">
                                    Acciones
                                </div>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white">

                        @foreach ($profesores as $p)
                            <tr class="">
                                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap ">
                                    {{ $p->name }} {{ $p->lastname }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $p->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $p->celular }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $p->created_at->format('d-m-Y') }}
                                </td>
                                <td class="px-6 py-4 flex items-center justify-center space-x-2">
                                    <x-custom.button href="{{ route('profesores.edit', $p) }}"
                                        class="bg-blue-500">Editar</x-custom.button>


                                    <form action="{{ route('usuarios.destroy', $p) }}" method="POST" class="m-0 p-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-white bg-red-500 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none hover:bg-red-400">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{-- Paginación de los usuarios --}}
                {{ $profesores->links() }}
            </div>

        </div>
    </section>
@endsection
