<div id="editProfileView" class="bg-white rounded-lg shadow-lg p-6 h-full">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gym-primary mb-2">Modifica tu contraseña</h2>
    </div>


    @if (session('success'))
        <x-alerts.success>{{ session('success') }}</x-alerts.success>
    @endif

    <div class="max-w-4xl">

        <div>

            <form wire:submit="updatePassword" class="space-y-6">
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Contraseña Actual</label>
                        <input type="password" wire:model="current_password" required autocomplete="current-password"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary">
                        @error('current_password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nueva Contraseña</label>
                        <input type="password" wire:model="password" required autocomplete="new-password"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary">
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Confirmar Nueva Contraseña</label>
                        <input type="password" wire:model="password_confirmation" required autocomplete="new-password"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary">
                        @error('password_confirmation')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center gap-4">
                        <button type="submit"
                            class="bg-gym-accent text-gym-primary py-2 px-6 rounded-md font-medium hover:bg-gym-accent-dark transition-colors">
                            Guardar
                        </button>

                        <x-action-message class="me-3" on="password-updated">
                            Guardado.
                        </x-action-message>
                    </div>
                </div>
            </form>
            <div class="mt-6">
                <button wire:navigate href="{{ route('settings.profile') }}" 
                    class="bg-gym-secondary text-white py-2 px-4 rounded-md font-medium hover:bg-gym-primary transition-colors">
                    Volver al Perfil
                </button>
            </div>
        </div>
    </div>
</div>

{{-- <section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Update password')" :subheading="__('Ensure your account is using a long, random password to stay secure')">
        <form wire:submit="updatePassword" class="mt-6 space-y-6">
            <flux:input wire:model="current_password" :label="__('Current password')" type="password" required
                autocomplete="current-password" />
            <flux:input wire:model="password" :label="__('New password')" type="password" required
                autocomplete="new-password" />
            <flux:input wire:model="password_confirmation" :label="__('Confirm Password')" type="password" required
                autocomplete="new-password" />

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <flux:button variant="primary" type="submit" class="w-full">{{ __('Save') }}</flux:button>
                </div>

                <x-action-message class="me-3" on="password-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>
    </x-settings.layout>
</section> --}}
