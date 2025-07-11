<x-custom.template>

    <section class="py-16 bg-gradient-to-br from-gym-primary via-gym-secondary to-gym-primary">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Planes de Membresía
                </h2>
                <p class="text-white text-lg opacity-90 max-w-2xl mx-auto">
                    Elige el plan que mejor se adapte a tus necesidades y comienza tu transformación hoy mismo.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">

                @foreach ($membresias as $membresia)

                    <x-cards.card-membresia :membresia="$membresia" :valorMensual="$valorMensual"></x-cards.card-membresia>
                
                @endforeach
                
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gym-primary mb-4">Comparación de Ahorros</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Ve cuánto puedes ahorrar eligiendo nuestros planes de mayor duración
                </p>
            </div>

            <x-membresias.comparacion-planes :membresias="$membresias" :valorMensual="$valorMensual"></x-membresias.comparacion-planes>
        </div>
    </section>

    <section class="py-16 bg-gym-bg">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gym-primary mb-4">¿Por qué elegir OneUp GYM?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Ofrecemos mucho más que un gimnasio tradicional. Descubre todos los beneficios incluidos en nuestras
                    membresías.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-gym-accent rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gym-primary mb-2">Equipos Modernos</h3>
                    <p class="text-gray-600 text-sm">Tecnología de última generación para maximizar tus resultados</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-gym-secondary rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gym-primary mb-2">Entrenadores Expertos</h3>
                    <p class="text-gray-600 text-sm">Profesionales certificados para guiarte en cada paso</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-gym-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gym-primary mb-2">Horarios Flexibles</h3>
                    <p class="text-gray-600 text-sm">Abierto 7 días a la semana con horarios extendidos</p>
                </div>
            </div>
        </div>
    </section>


    <section class="py-16 bg-gradient-to-r from-gym-primary to-gym-secondary text-white">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <h2 class="text-3xl font-bold mb-4">¿Listo para comenzar?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
                Únete a OneUp GYM hoy y comienza tu transformación.
            </p>
        </div>
    </section>

</x-custom.template>
