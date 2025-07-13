@php
    $isActive = fn($route) => request()->routeIs($route)
    ? 'flex-1 flex items-center justify-center py-3 px-4 text-gym-primary border-2 border-gym-primary bg-white font-semibold rounded-lg -m-px z-10 focus:outline-none'
    : 'flex-1 flex items-center justify-center py-3 px-4 text-gym-primary hover:bg-gray-200 transition-colors border-none focus:outline-none';
@endphp

<section class="min-h-1000 gym-bg flex ">
        <div class="container mx-auto lg:px-12 pb-5">
            <div class="flex w-full bg-gray-100 rounded-lg overflow-hidden border border-gray-200">
                <!-- Profesores -->
                <a href="{{ route('dashboard.admin.profesores') }}"
                    class="{{ $isActive('dashboard.admin.profesores') }}">
                    <svg class="w-5 h-5 mr-2 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="font-medium text-sm">Profesores</span>
                </a>
                <!-- Clientes (activo) -->
                <a href="{{ route('dashboard.admin.clientes') }}"
                    class="{{ $isActive('dashboard.admin.clientes') }}">
                    <svg class="w-5 h-5 mr-2 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m9-4a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span class="font-medium text-sm">Usuarios</span>
                </a>
                <!-- Clases -->
                <a href="{{ route('dashboard.admin.clases') }}"
                    class="{{ $isActive('dashboard.admin.clases') }}">
                    <svg class="w-5 h-5 mr-2 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="font-medium text-sm">Clases</span>
                </a>
            </div>
        </div>
</section>
