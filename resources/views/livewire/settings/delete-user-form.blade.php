<section class="mt-10 space-y-6">
    
    <!-- Botón para abrir modal -->
    <button 
        x-data 
        x-on:click="$dispatch('open-modal', 'confirm-user-deletion')" 
        class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-md transition-colors">
        {{ __('Borrar cuenta') }}
    </button>

    <!-- Modal -->
    <div 
        x-data="{ show: false }" 
        x-on:open-modal.window="if ($event.detail === 'confirm-user-deletion') show = true"
        x-on:close-modal.window="if ($event.detail === 'confirm-user-deletion') show = false"
        x-on:keydown.escape.window="show = false"
        x-show="show" 
        x-cloak
        class="fixed inset-0 z-50 overflow-y-auto"
        style="display: none;">
        
        <!-- Overlay -->
        <div class="flex items-center justify-center min-h-screen px-4 text-center">
            <div 
                x-show="show" 
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-black bg-opacity-50 transition-opacity"
                x-on:click="show = false">
            </div>

            <!-- Modal Content -->
            <div 
                x-show="show" 
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="relative inline-block w-full max-w-lg p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-lg">
                
                <!-- Close button -->
                <button 
                    x-on:click="show = false"
                    class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>

                <!-- Form -->
                <form wire:submit="deleteUser" class="space-y-6">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">{{ __('¿Estas seguro que queres borrar la cuenta?') }}</h3>
                        <p class="mt-2 text-sm text-gray-600">
                            {{ __('Una vez que borres la cuenta todos tus datos ingresados seran borrados permanentemente. Por favor ingresa tu contraseña para confirmar') }}
                        </p>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Contraseña') }}</label>
                        <input 
                            type="password" 
                            wire:model="password" 
                            id="password"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm"
                            placeholder="Ingresa tu contraseña">
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end space-x-2">
                        <button 
                            type="button" 
                            x-on:click="show = false"
                            class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded-md transition-colors">
                            {{ __('Cancelar') }}
                        </button>
                        <button 
                            type="submit" 
                            class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-md transition-colors">
                            {{ __('Borrar cuenta') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
