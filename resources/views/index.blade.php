<x-custom.template title="OneUp Gym">

    <section class="min-h-screen bg-gradient-to-br from-gym-primary via-gym-secondary to-gym-primary flex items-center pt-20">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="max-w-2xl">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    Transforma tu vida en<br>
                    <span class="text-gym-accent">OneUp GYM</span>
                </h1>

                <p class="text-white text-lg md:text-xl leading-relaxed mb-8 opacity-90">
                    Ofrecemos las mejores instalaciones y clases con profesionales certificados para ayudarte a alcanzar tus objetivos fitness.
                </p>

                <a href="{{route('clases')}}" class="bg-gym-accent hover:bg-gym-accent-dark text-white font-semibold px-8 py-3 rounded-lg transition-colors duration-300 shadow-lg hover:shadow-xl">
                    Ver clases
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gym-bg">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gym-primary mb-4">
                    ¿Por qué elegir <span class="text-gym-accent">OneUp GYM</span>?
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Precios Accesibles -->
                <div class="text-center group">
                    <div class="bg-gym-accent w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-gym-accent-dark transition-colors duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gym-primary mb-2">Precios Accesibles</h3>
                    <p class="text-gray-600">Planes flexibles que se adaptan a tu presupuesto sin comprometer la calidad.</p>
                </div>

                <!-- Entrenadores Certificados -->
                <div class="text-center group">
                    <div class="bg-gym-accent w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-gym-accent-dark transition-colors duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gym-primary mb-2">Entrenadores Expertos</h3>
                    <p class="text-gray-600">Profesionales certificados que te guiarán hacia tus objetivos de forma segura.</p>
                </div>

                <!-- Horarios Flexibles -->
                <div class="text-center group">
                    <div class="bg-gym-accent w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-gym-accent-dark transition-colors duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gym-primary mb-2">Horarios Flexibles</h3>
                    <p class="text-gray-600">Abierto 24/7 para que entrenes cuando mejor te convenga.</p>
                </div>

                <!-- Resultados Garantizados -->
                <div class="text-center group">
                    <div class="bg-gym-accent w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-gym-accent-dark transition-colors duration-300">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gym-primary mb-2">Resultados Comprobados</h3>
                    <p class="text-gray-600">Miles de miembros han alcanzado sus metas con nuestro sistema probado.</p>
                </div>
            </div>
        </div>
    </section>

        <!-- Seccion de membresias -->
    <section class="py-16 bg-gradient-to-br from-gym-primary via-gym-secondary to-gym-primary">
        <div class="container mx-auto px-6 lg:px-12 flex flex-col">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Planes de Membresía
                </h2>
                <p class="text-white text-lg opacity-90 max-w-2xl mx-auto">
                    Elige el plan que mejor se adapte a tus necesidades y comienza tu transformación hoy mismo.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Plan Mensual -->
                <div class="bg-white rounded-lg shadow-xl p-8 flex flex-col ">
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold text-gym-primary mb-2">Membresía Mensual</h3>
                        <div class="mb-2">
                            <span class="text-gray-400 text-lg">&nbsp;</span>
                        </div>
                        <div class="text-4xl font-bold text-gym-primary mb-2">$35.000</div>
                        <p class="text-gray-600">Pago mensual</p>
                    </div>

                    <div class="mb-6">
                        <p class="text-gray-600 mb-4">Acceso completo a todas las instalaciones y clases</p>

                    </div>

                    <a href="{{ route('membresias.index') }}"class="w-full bg-gym-secondary hover:bg-gym-primary text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-300">
                        Ver mas
                    </a>
                </div>


                <!-- Plan Anual -->
                <div class="bg-white rounded-lg shadow-xl p-8  border-4 border-gym-accent flex flex-col">


                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold text-gym-primary mb-2">Membresía Anual
                        </h3>
                        <div class="mb-2">
                            <span class="text-gray-400 text-lg">$25.000/mes</span>
                        </div>
                        <div class="text-4xl font-bold text-gym-primary mb-2">$300.000</div>
                        <p class="text-gray-600">Pago anual</p>
                    </div>


                    <div class="mb-6">
                        <p class="text-gray-600 mb-4">Acceso completo a todas las instalaciones y clases</p>
                    </div>



                    <a href="{{ route('membresias.index') }}" class="w-full bg-gym-accent hover:bg-gym-accent-dark text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-300">
                        Ver mas
                    </a>
                </div>

                <!-- Plan Semestral -->
                <div class="bg-white rounded-lg shadow-xl p-8 flex flex-col">
                    <div class="text-center mb-6">
                        <h3 class="text-xl font-bold text-gym-primary mb-2">Membresía Semestral</h3>
                        <div class="mb-2">
                            <span class="text-gray-400 text-lg">$30.000/mes</span>
                        </div>
                        <div class="text-4xl font-bold text-gym-primary mb-2">$180.000</div>
                        <p class="text-gray-600">Pago semestral</p>
                    </div>

                    <div class="mb-6">
                        <p class="text-gray-600 mb-4">Acceso completo a todas las instalaciones y clases</p>

                    </div>

                    <a href="{{ route('membresias.index') }}" class="w-full bg-gym-secondary hover:bg-gym-primary text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-300">
                        Ver mas
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-custom.template>