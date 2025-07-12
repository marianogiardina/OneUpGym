{{-- Layout del dashboard --}}

<x-custom.template>

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


    <x-custom.tab-selector></x-custom.tab-selector>

    <hr>

    {{-- aca va la tabla segun la seleccion del tab --}}

    @yield('content')



</x-custom.template>
