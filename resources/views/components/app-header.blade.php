<header class="fixed top-0 left-0 w-full bg-gym-primary text-white shadow-lg z-50">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <a href="#" class="flex items-center">
                    <span class="text-xl font-bold text-gym-accent">OneUp</span>
                    <span class="ml-1 text-xl font-bold">GYM</span>
                </a>
            </div>
            <nav class="hidden md:flex items-center space-x-6">
                <a href="index.html" class="text-sm font-medium hover:text-gym-accent transition-colors">Inicio</a>
                <a href="clases.html" class="text-sm font-medium hover:text-gym-accent transition-colors">Clases</a>
                @auth
                    <a href="calendar.html" class="text-sm font-medium hover:text-gym-accent transition-colors">Calendario</a>
                @else
                    <a href="register.html" class="text-gym-accent text-sm font-medium hover:text-white transition-colors">
                        Login
                    </a>
                    <a href="register.html" class="text-gym-accent text-sm font-medium hover:text-white transition-colors">
                        Registrarse
                    </a>
                @endauth
            </nav>

            <button class="md:hidden text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>
</header>