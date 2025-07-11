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


</x-custom.template>
