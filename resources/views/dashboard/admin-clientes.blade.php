@extends('dashboard.index')

@section('content')
    <section class="min-h-1000 gym-bg flex">

        <div class="container mx-auto lg:px-12 pb-10">


            <div class="my-6">
                @if (session('success'))
                    <x-alerts.success>{{ session('success') }}</x-alerts.success>
                @endif

            </div>


            <div class="w-full flex align-middle justify-between">


                <div>
                    <h2 class="text-lg md:text-xl lg:text-2xl font-bold">Usuarios</h2>
                </div>


                <div class="flex justify-end mb-4 h-10">
                    {{-- Botón para agregar un nuevo Usuario --}}

                    <x-custom.button href="{{ route('usuarios.create') }}">Agregar Usuario</x-custom.button>

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
                                    Email
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Teléfono
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Rol
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Estado Membresia
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Fecha Ingreso
                                </div>
                            </th>

                            <th scope="col" class="px-6 py-3 w-3">
                                <div class="flex items-center justify-center">
                                    Acciones
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
                                    {{ $c->rol->label() }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($c->rol === \App\Enums\RolEnum::USER)
                                        

                                        @if($c->membresiaUsuario)


                                            {{ $c->membresiaUsuario->membresiaActiva() ? 'Activa' : 'Inactiva' }}

                                        @else
                                            Sin membresía
                                        @endif
                                    @else
                                        -
                                    @endif
                                </td>

                                <td class="px-6 py-4">
                                    {{ $c->created_at->format('d-m-Y') }}
                                </td>

                                <td class="px-6 py-4 flex items-center justify-center space-x-2">

                                    <x-custom.button href="{{ route('usuarios.edit', $c) }}"
                                        class="bg-blue-500">Editar</x-custom.button>


                                    <form action="{{ route('usuarios.destroy', $c) }}" method="POST" class="m-0 p-2">
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
                {{ $users->links() }}
            </div>

        </div>
    </section>
@endsection
