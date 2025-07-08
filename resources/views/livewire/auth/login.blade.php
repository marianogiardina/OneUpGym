<div class="w-full max-w-md sm:max-w-lg">
    <div class="bg-white rounded-lg shadow-xl overflow-hidden">

        <div class="px-6 py-8 sm:px-8">
            <div class="text-center">
                
                <div class="mx-auto w-16 h-16 bg-gym-accent rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                
                <h2 class="text-2xl sm:text-3xl font-bold text-gym-primary mb-2">
                    Iniciar Sesión
                </h2>
                <p class="text-gray-600 text-sm sm:text-base">
                    Ingresa tus datos para iniciar sesion.
                </p>
            </div>
        </div>

        <div class="px-6 pb-8 sm:px-8">

            <form wire:submit="login" class="space-y-6">
                
                <div class="grid grid-cols-1 sm:grid-cols-1 gap-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Mail
                        </label>
                        <x-inputs.user-input
                            wire:model="email"
                            type="email"
                            required
                            autofocus
                            autocomplete="email"
                            placeholder="email@example.com"
                        />
                    </div>
                
                </div>

                
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Contraseña
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-gym-secondary hover:text-gym-primary transition-colors">
                                ¿Olvidaste tu contraseña?
                            </a>
                        @endif
                    </div>
                    <x-inputs.user-input 
                        wire:model="password"
                        type="password"
                        required
                        autocomplete="current-password"
                        :placeholder="__('••••••••')"
                        viewable
                    />
                </div>

                
                <div class="flex items-center">
                    <input 
                        wire:model="remember"
                        id="remember-me"
                        type="checkbox" 
                        class="h-4 w-4 text-gym-secondary focus:ring-gym-secondary border-gray-300 rounded"
                    >
                    <label for="remember-me" class="ml-2 block text-sm text-gray-700">
                        Recordarme
                    </label>
                </div>

                
                <button 
                    type="submit"
                    class="w-full bg-gym-accent text-gym-primary py-3 px-4 rounded-md font-medium text-sm sm:text-base hover:bg-gym-accent-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gym-accent transition-colors duration-200"
                >
                    Iniciar Sesión
                </button>

            </form>

            @if (Route::has('register'))
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        ¿No tienes una cuenta?
                        <a href="{{ route('register') }}" class="font-medium text-gym-secondary hover:text-gym-primary transition-colors">
                            Regístrate aquí
                        </a>
                    </p>
                </div>
            @endif

        </div>

    </div>

{{--     
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login" class="flex flex-col gap-6">
        
        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            required
            autofocus
            autocomplete="email"
            placeholder="email@example.com"
        />

        
        <div class="relative">
            <flux:input
                wire:model="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="current-password"
                :placeholder="__('Password')"
                viewable
            />

            @if (Route::has('password.request'))
                <flux:link class="absolute end-0 top-0 text-sm" :href="route('password.request')" wire:navigate>
                    {{ __('Forgot your password?') }}
                </flux:link>
            @endif
        </div>

        
        <flux:checkbox wire:model="remember" :label="__('Remember me')" />

        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Log in') }}</flux:button>
        </div>
    </form>

    @if (Route::has('register'))
        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Don\'t have an account?') }}
            <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}</flux:link>
        </div>
    @endif
</div>

<div class="w-full max-w-md sm:max-w-lg">
            
    <div class="bg-white rounded-lg shadow-xl overflow-hidden">
        
        <div class="px-6 py-8 sm:px-8">
            <div class="text-center">
                
                <div class="mx-auto w-16 h-16 bg-gym-accent rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                
                <h2 class="text-2xl sm:text-3xl font-bold text-gym-primary mb-2">
                    Iniciar Sesión
                </h2>
                <p class="text-gray-600 text-sm sm:text-base">
                    Ingresa tus datos para iniciar sesion.
                </p>
            </div>
        </div>

        
        <div class="px-6 pb-8 sm:px-8">
            <form class="space-y-6">
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">
                            Nombre
                        </label>
                        <input 
                            type="text" 
                            id="firstName" 
                            name="firstName" 
                            required
                            class="w-full px-3 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary text-sm sm:text-base"
                            placeholder="Nombre"
                        >
                    </div>
                    <div>
                        <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">
                            Apellido
                        </label>
                        <input 
                            type="text" 
                            id="lastName" 
                            name="lastName" 
                            required
                            class="w-full px-3 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary text-sm sm:text-base"
                            placeholder="Apellido"
                        >
                    </div>
                </div>

                
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-sm font-medium text-gray-700">
                            Contraseña
                        </label>
                        <a href="#" class="text-sm text-gym-secondary hover:text-gym-primary transition-colors">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required
                        class="w-full px-3 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary text-sm sm:text-base"
                        placeholder="••••••••"
                    >
                </div>

                
                <div class="flex items-center">
                    <input 
                        id="remember-me" 
                        name="remember-me" 
                        type="checkbox" 
                        class="h-4 w-4 text-gym-secondary focus:ring-gym-secondary border-gray-300 rounded"
                    >
                    <label for="remember-me" class="ml-2 block text-sm text-gray-700">
                        Recordarme
                    </label>
                </div>

                
                <button 
                    type="submit"
                    class="w-full bg-gym-accent text-gym-primary py-3 px-4 rounded-md font-medium text-sm sm:text-base hover:bg-gym-accent-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gym-accent transition-colors duration-200"
                >
                    Iniciar Sesión
                </button>
            </form>


            
            <div class="mt-6 text-center">
                <p class="text-sm text-gray-600">
                    ¿No tienes una cuenta?
                    <a href="#" class="font-medium text-gym-secondary hover:text-gym-primary transition-colors">
                        Regístrate aquí
                    </a>
                </p>
            </div>
        </div>
    </div>

    
    <div class="mt-8 text-center">
        <p class="text-xs text-gray-500">
            Al iniciar sesión, aceptas nuestros 
            <a href="#" class="text-gym-secondary hover:text-gym-primary">Términos de Servicio</a> 
            y 
            <a href="#" class="text-gym-secondary hover:text-gym-primary">Política de Privacidad</a>
        </p>
    </div>
</div> --}}
