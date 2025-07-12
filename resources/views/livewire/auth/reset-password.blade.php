<div class="w-full max-w-md sm:max-w-lg lg:max-w-xl">

    <div class="w-full max-w-md sm:max-w-lg">
        
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            
            <div class="px-6 py-8 sm:px-8">

                <div class="text-center">
                    
                    <div class="mx-auto w-16 h-16 bg-gym-accent rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    
                    <h2 class="text-2xl sm:text-3xl font-bold text-gym-primary mb-2">
                        Modificar Contraseña
                    </h2>
                    <p class="text-gray-600 text-sm sm:text-base">
                        Ingresa tu nueva contraseña
                    </p>
                </div>

            </div>

            
            <div class="px-6 pb-8 sm:px-8">
                
                <div>

                    <x-auth-session-status class="text-center" :status="session('status')" />

                    <form wire:submit="resetPassword" class="space-y-6">
                        <div>

                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Correo Electrónico
                            </label>
                            <x-inputs.user-input
                                wire:model="email"
                                type="email"
                                required
                                autocomplete="email"
                                disable
                            />
                        </div>

                        <div>

                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Contraseña
                            </label>
                            <x-inputs.user-input
                                wire:model="password"
                                type="password"
                                required
                                autocomplete="new-password"
                                :placeholder="__('••••••••')"
                                viewable
                            />
                        </div>

                        <div>

                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Confirmar Contraseña
                            </label>
                            <x-inputs.user-input
                                wire:model="password_confirmation"
                                type="password"
                                required
                                autocomplete="new-password"
                                :placeholder="__('••••••••')"
                                viewable
                            />
                        </div>

                        <x-buttons.btn-user-form>
                            Modificar Contraseña
                        </x-buttons.btn-user-form>
                    </form>

                </div>

            </div>

        </div>

    </div>

</div>



{{-- <div class="flex flex-col gap-6">
    <x-auth-header :title="__('Reset password')" :description="__('Please enter your new password below')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="resetPassword" class="flex flex-col gap-6">
        <!-- Email Address -->
        <x-inputs.user-input
            wire:model="email"
            :label="__('Email')"
            type="email"
            required
            autocomplete="email"
        />

        <!-- Password -->
        <x-inputs.user-input
            wire:model="password"
            :label="__('Password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
            viewable
        />

        <!-- Confirm Password -->
        <x-inputs.user-input
            wire:model="password_confirmation"
            :label="__('Confirm password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirm password')"
            viewable
        />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Reset password') }}
            </flux:button>
        </div>
    </form>
</div> --}}
