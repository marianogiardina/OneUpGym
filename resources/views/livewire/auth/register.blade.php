<x-custom.template mainClass="mt-20 flex items-center justify-center min-h-screen py-8 px-4 sm:py-12 sm:px-6 lg:px-8" title="Crear Cuenta - OneUp GYM">

    <div class="w-full max-w-md sm:max-w-lg lg:max-w-xl">

        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
        
            <div class="px-6 py-8 sm:px-8">
                <div class="text-center">
                    
                    <div class="mx-auto w-16 h-16 bg-gym-accent rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                    </div>
                    
                    <h2 class="text-2xl sm:text-3xl font-bold text-gym-primary mb-2">
                        Crear Cuenta
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base">
                        Únete a OneUp GYM y comienza tu transformación
                    </p>
                </div>
            </div>
            
            <div class="px-6 pb-8 sm:px-8">

                <!-- Session Status -->
                <x-auth-session-status class="text-center" :status="session('status')" />

                <form wire:submit="register" class="space-y-6">
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Nombre
                            </label>
                            <x-inputs.user-input
                                wire:model="name"
                                type="text"
                                required
                                autofocus
                                autocomplete="name"
                                id="name"
                                :placeholder="__('Full name')"
                            />
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">
                                Apellido
                            </label>
                            <x-inputs.user-input
                                wire:model="lastname"
                                type="text"
                                required
                                autofocus
                                autocomplete="lastname"
                                id="lastName"
                                :placeholder="__('Lastname')"
                            />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                                Contraseña
                            </label>
                            <x-inputs.user-input
                                wire:model="password"
                                type="password"
                                required
                                autocomplete="new-password"
                                id="password"
                                :placeholder="__('Password')"
                                viewable
                            />
                        </div>
                        <div>
                            <label for="confirmPassword" class="block text-sm font-medium text-gray-700 mb-2">
                                Confirmar Contraseña
                            </label>
                            <x-inputs.user-input
                                wire:model="password_confirmation"
                                type="password"
                                required
                                autocomplete="new-password"
                                id="confirmPassword"
                                :placeholder="__('Confirm password')"
                                viewable
                            />
                        </div>
                    </div>

                    <div class="mt-6">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">Ingresa tus datos</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Correo Electrónico
                        </label>
                        <x-inputs.user-input
                            wire:model="email"
                            type="email"
                            required
                            autocomplete="email"
                            id="email"
                            placeholder="email@example.com"
                        />
                        <p class="mt-1 text-xs text-gray-500">Usaremos este email para enviarte información importante</p>
                    </div>

                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Teléfono
                        </label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            required
                            class="w-full px-3 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary text-sm sm:text-base"
                            placeholder="+54 9 11 1234-5678"
                        >
                    </div>

                    
                    <div>
                        <label for="birthDate" class="block text-sm font-medium text-gray-700 mb-2">
                            Fecha de Nacimiento
                        </label>
                        <input 
                            type="date" 
                            id="birthDate" 
                            name="birthDate" 
                            required
                            class="w-full px-3 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary text-sm sm:text-base"
                        >
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="weight" class="block text-sm font-medium text-gray-700 mb-2">
                                Peso
                            </label>
                            <input 
                                type="number"
                                min="0" 
                                id="weight" 
                                name="weight" 
                                required
                                class="w-full px-3 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary text-sm sm:text-base"
                                placeholder="Ingresa tu peso en kg"
                            >
                        </div>
                        <div>
                            <label for="height" class="block text-sm font-medium text-gray-700 mb-2">
                                Altura
                            </label>
                            <input 
                                type="number"
                                min="100" 
                                id="height" 
                                name="height" 
                                required
                                class="w-full px-3 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary text-sm sm:text-base"
                                placeholder="Ingresa tu altura en cm"
                            >
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-start">
                            <input 
                                id="terms" 
                                name="terms" 
                                type="checkbox" 
                                required
                                class="h-4 w-4 text-gym-secondary focus:ring-gym-secondary border-gray-300 rounded mt-1"
                            >
                            <label for="terms" class="ml-2 block text-sm text-gray-700">
                                Acepto los 
                                <a href="#" class="text-gym-secondary hover:text-gym-primary font-medium">Términos y Condiciones</a> 
                                y la 
                                <a href="#" class="text-gym-secondary hover:text-gym-primary font-medium">Política de Privacidad</a>
                            </label>
                        </div>

                        <div class="flex items-start">
                            <input 
                                id="newsletter" 
                                name="newsletter" 
                                type="checkbox" 
                                class="h-4 w-4 text-gym-secondary focus:ring-gym-secondary border-gray-300 rounded mt-1"
                            >
                            <label for="newsletter" class="ml-2 block text-sm text-gray-700">
                                Quiero recibir noticias, ofertas especiales y consejos de fitness por email
                            </label>
                        </div>
                    </div>

                    
                    <button 
                        type="submit"
                        class="w-full bg-gym-accent text-gym-primary py-3 px-4 rounded-md font-medium text-sm sm:text-base hover:bg-gym-accent-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gym-accent transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed"
                        id="submitBtn"
                    >
                        Crear Mi Cuenta
                    </button>
                </form>
                
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        ¿Ya tienes una cuenta?
                        <a class="font-medium text-gym-secondary hover:text-gym-primary transition-colors" href="{{route('login')}}" >
                            Inicia sesión aquí
                        </a>
                    </p>
                </div>
            </div>
        </div>

        
        <div class="mt-8 bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-lg font-semibold text-gym-primary mb-4 text-center">
                ¿Por qué unirte a OneUp GYM?
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-gym-accent rounded-full flex items-center justify-center mb-2">
                        <svg class="w-6 h-6 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gym-primary">Equipos Modernos</h4>
                    <p class="text-xs text-gray-600">Tecnología de última generación</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-gym-accent rounded-full flex items-center justify-center mb-2">
                        <svg class="w-6 h-6 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gym-primary">Entrenadores Expertos</h4>
                    <p class="text-xs text-gray-600">Profesionales certificados</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-gym-accent rounded-full flex items-center justify-center mb-2">
                        <svg class="w-6 h-6 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-medium text-gym-primary">Horarios Flexibles</h4>
                    <p class="text-xs text-gray-600">Abierto 7 días a la semana</p>
                </div>
            </div>
        </div>
        
    </div>
    
</x-custom.template>



{{-- <form wire:submit="register" class="flex flex-col gap-6">
    <!-- Name -->
    <x-inputs.user-input
        wire:model="name"
        type="text"
        required
        autofocus
        autocomplete="name"
        :placeholder="__('Full name')"
    />

    <!-- Lastname -->
    <x-inputs.user-input
        wire:model="lastname"
        type="text"
        required
        autofocus
        autocomplete="lastname"
        :placeholder="__('Lastname')"
    />

    <!-- Email Address -->
    <x-inputs.user-input
        wire:model="email"
        type="email"
        required
        autocomplete="email"
        placeholder="email@example.com"
    />
    <!-- Birth Date -->

    <x-inputs.user-input
        wire:model="fecha_nacimiento"
        type="date"
        required
        autocomplete="birtdate"
        placeholder="YYYY-MM-DD"
    />

    <!-- Password -->
    <x-inputs.user-input
        wire:model="password"
        type="password"
        required
        autocomplete="new-password"
        :placeholder="__('Password')"
        viewable
    />

    <!-- Confirm Password -->
    <x-inputs.user-input
        wire:model="password_confirmation"
        type="password"
        required
        autocomplete="new-password"
        :placeholder="__('Confirm password')"
        viewable
    />

    <div class="flex items-center justify-end">
        <flux:button type="submit" variant="primary" class="w-full">
            {{ __('Create account') }}
        </flux:button>
    </div>
</form>

<div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
    {{ __('Already have an account?') }}
    <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
</div> --}}