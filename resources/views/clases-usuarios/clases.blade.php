<x-custom.template>

    <!-- Seccion descripcion -->
    <section class="bg-gradient-to-br from-gym-primary via-gym-secondary to-gym-primary py-16">
        <div class="container mx-auto px-6 lg:px-12 text-center mt-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Nuestras Clases
            </h1>
            <p class="text-white text-lg md:text-xl opacity-90 max-w-3xl mx-auto">
                Descubre la variedad de disciplinas que ofrecemos. Cada clase está diseñada para ayudarte a alcanzar
                tus objetivos de fitness de manera divertida y efectiva.
            </p>
        </div>
    </section>

    <!-- Seccion de clases -->
    
    <livewire:listado-clases />

    <!-- Seccion de botones -->
    <section class="py-16 bg-gradient-to-br from-gym-primary via-gym-secondary to-gym-primary">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                ¿Listo para comenzar?
            </h2>
            <p class="text-white text-lg opacity-90 mb-8 max-w-2xl mx-auto">
                Únete a OneUp GYM y descubre cuál es la clase perfecta para ti. Nuestros instructores certificados
                te guiarán en cada paso de tu transformación.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{route('calendario.index')}}"
                    class="bg-gym-accent hover:bg-gym-accent-dark text-white font-semibold px-8 py-3 rounded-lg transition-colors duration-300 shadow-lg hover:shadow-xl">
                    Ver Horarios
                </a>
                <a href="{{route('contacto')}}"
                    class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-gym-primary font-semibold px-8 py-3 rounded-lg transition-colors duration-300">
                    Contactar
                </a>
            </div>
        </div>
    </section>

</x-custom.template>
