<div class="w-full max-w-md sm:max-w-lg lg:max-w-xl">

    <div class="w-full max-w-md sm:max-w-lg">
        
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            
            <div class="px-6 py-8 sm:px-8">

                <div class="text-center">
                    
                    <div class="mx-auto w-16 h-16 bg-gym-accent rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    
                    <h2 class="text-2xl sm:text-3xl font-bold text-gym-primary mb-2">
                        Recuperar Contraseña
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base">
                        Ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña
                    </p>
                </div>

            </div>

            
            <div class="px-6 pb-8 sm:px-8">
                
                <div id="emailStep">

                    <x-auth-session-status class="text-center" :status="session('status')" />

                    <form wire:submit="sendPasswordResetLink" class="space-y-6" id="recoveryForm">
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Correo Electrónico
                            </label>
                            <x-inputs.user-input
                                wire:model="email"
                                type="email"
                                required
                                autofocus
                                placeholder="email@example.com"
                                viewable
                            />
                            <p class="mt-1 text-xs text-gray-500">Te enviaremos las instrucciones a este correo</p>
                        </div>

                        <x-buttons.btn-user-form>
                            Enviar link de recuperacion
                        </x-buttons.btn-user-form>
                    </form>

                </div>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        ¿Recordaste tu contraseña?
                        <a href="{{ route('login') }}" class="font-medium text-gym-secondary hover:text-gym-primary transition-colors">
                            Volver al inicio de sesión
                        </a>
                    </p>
                </div>

            </div>

        </div>

    </div>

</div>

{{-- <div class="flex flex-col gap-6">
    <x-auth-header :title="__('Forgot password')" :description="__('Enter your email to receive a password reset link')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink" class="flex flex-col gap-6">
        <!-- Email Address -->
        <x-inputs.user-input
            wire:model="email"
            :label="__('Email Address')"
            type="email"
            required
            autofocus
            placeholder="email@example.com"
            viewable
        />

        <flux:button variant="primary" type="submit" class="w-full">{{ __('Email password reset link') }}</flux:button>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-400">
        {{ __('Or, return to') }}
        <flux:link :href="route('login')" wire:navigate>{{ __('log in') }}</flux:link>
    </div>
</div> --}}
