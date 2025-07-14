
<div class="container mx-auto px-4 py-8">   
    {{-- Alerta para cuando el usuario compra una membresia --}}
    @if (session('compro-membresia'))
        <x-alerts.success>{{ session('compro-membresia') }}</x-alerts.success>
    @endif

    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gym-primary mb-2">Mi Perfil</h1>
        <p class="text-gray-600">Gestiona tus clases y edita tus datos</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 items-start">
        
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-lg p-6 sticky top-4 h-full">
                
                <div class="text-center mb-6">
                    <div class="w-24 h-24 bg-gray-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gym-primary">{{$name ." ". $lastname}}</h3>
                    
                    @if ($membresiaUsuario && $membresiaUsuario->membresiaActiva())
                        <span class="inline-block bg-gym-accent text-gym-primary px-3 py-1 rounded-full text-sm font-medium mt-2">
                            Activo
                        </span>
                    @else

                        <span class="inline-block bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-medium mt-2">
                            Inactivo
                        </span>
                    
                    @endif
                </div>

                
                <div class="space-y-4 mb-6">
                    <div>
                        <p class="text-sm text-gray-600">Mail</p>
                        <p class="font-medium">{{$email}}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Miembro desde</p>
                        <p class="font-medium">{{$createdAt->locale('es')->translatedFormat('j \\d\\e F \\d\\e Y')}}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Membresía</p>
                        <p class="font-medium">{{($membresiaUsuario) ? ucfirst($membresiaUsuario->membresia->tipo) : 'Sin membresia'}}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-600">Fecha de vencimiento</p>
                        <p class="font-medium">{{ $membresiaUsuario ? $membresiaUsuario->fecha_fin->locale('es')->translatedFormat('j \\d\\e F \\d\\e Y') : 'Sin membresía' }}</p>
                    </div>
                </div>

                
                <button wire:click="mostrarEdicionPerfil" class="w-full bg-gym-secondary text-white py-2 px-4 rounded-md font-medium hover:bg-gym-primary transition-colors">
                    Editar Perfil
                </button>

                <form method="POST" action="{{ route('logout') }}" class="w-full mt-2">
                    @csrf
                    <button type="submit"  class="w-full bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-md font-medium ">
                        {{ __('Cerrar sesion') }}
                    </button>
                </form>

                <div class="mt-8 space-y-4">
                    <h4 class="font-semibold text-gym-primary">Resumen</h4>
                    
                    <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-sm">Clases Inscriptas</span>
                        </div>
                        <span class="bg-blue-600 text-white px-2 py-1 rounded-full text-sm font-bold">3</span>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="lg:col-span-3">
            
            <div id="profileView" class="bg-white rounded-lg shadow-lg h-full @if($editandoPerfil) hidden @endif">
                <!-- Tabs -->
                <div class="border-b border-gray-200">
                    <nav class="flex">
                        <div class="tab-button px-6 py-4 text-sm font-medium border-b-2">
                            Mis Clases
                        </div>
                        
                    </nav>
                </div>
                
                <div class="p-6">
                    
                    <div class="tab-content">
                        <livewire:profile.mis-clases />
                    </div>
                </div>
            </div>

            
            <div id="editProfileView" class="bg-white rounded-lg shadow-lg p-6 h-full @if(!$editandoPerfil) hidden @endif">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gym-primary mb-2">Mi Perfil</h2>
                    <p class="text-gray-600">Gestiona tu información personal</p>
                </div>

                
                @if (session('status') === 'profile-updated')
                    <x-alerts.success>{{ session('message', 'Perfil actualizado correctamente.') }}</x-alerts.success>
                @endif

                <div class="max-w-4xl">
                    
                    <div>
                        <h3 class="text-lg font-semibold text-gym-primary mb-2">Información Personal</h3>
                        <p class="text-sm text-gray-600 mb-6">Actualiza tu información de contacto y perfil</p>
                        
                        <form wire:submit="updateProfileInformation" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nombre</label>
                                    <input type="text" wire:model="name" required autocomplete="name" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary">
                                    @error('name')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Apellido</label>
                                    <input type="text" wire:model="lastname" required autocomplete="lastname" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary">
                                    @error('lastname')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Correo Electrónico</label>
                                    <input type="email" wire:model="email" required autocomplete="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary">
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Celular</label>
                                    <input type="tel" wire:model="celular" required autocomplete="celular" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary">
                                    @error('celular')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Peso <span class="text-gray-400 text-xs">(opcional)</span></label>
                                    <input type="number" wire:model="peso" min="0" autocomplete="peso" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary">
                                    @error('peso')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Altura <span class="text-gray-400 text-xs">(opcional)</span></label>
                                    <input type="number" wire:model="altura" min="100" autocomplete="altura" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary">
                                    @error('altura')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button type="submit" class="bg-gym-accent text-gym-primary py-2 px-6 rounded-md font-medium hover:bg-gym-accent-dark transition-colors">
                                    Guardar Cambios
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <h3 class="text-lg font-semibold text-red-600 mb-4">Darse de Baja</h3>
                    <x-alerts.danger>
                        <p class="text-sm text-red-700 mb-2">
                            Si das de baja tu cuenta, se eliminarán todos tus datos y no podrás recuperarlos.
                        </p>
                        <p class="text-sm text-red-700">
                            Al darte de baja, perderás acceso a todas tus reservas, historial de clases y beneficios de membresía. Esta acción no puede deshacerse.
                        </p>
                    </x-alerts.danger>
                    <livewire:settings.delete-user-form />
                </div>

                
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <button wire:click="mostrarVistaPerfil" class="text-gym-secondary hover:text-gym-primary font-medium">
                        ← Volver al perfil
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Profile')" :subheading="__('Update your name and email address')">
        <form wire:submit="updateProfileInformation" class="my-6 w-full space-y-6">
            <flux:input wire:model="name" :label="__('Name')" type="text" required autofocus autocomplete="name" />

            <div>
                <flux:input wire:model="email" :label="__('Email')" type="email" required autocomplete="email" />

                @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail &&! auth()->user()->hasVerifiedEmail())
                    <div>
                        <flux:text class="mt-4">
                            {{ __('Your email address is unverified.') }}

                            <flux:link class="text-sm cursor-pointer" wire:click.prevent="resendVerificationNotification">
                                {{ __('Click here to re-send the verification email.') }}
                            </flux:link>
                        </flux:text>

                        @if (session('status') === 'verification-link-sent')
                            <flux:text class="mt-2 font-medium !dark:text-green-400 !text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </flux:text>
                        @endif
                    </div>
                @endif
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <flux:button variant="primary" type="submit" class="w-full">{{ __('Save') }}</flux:button>
                </div>

                <x-action-message class="me-3" on="profile-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>

        <livewire:settings.delete-user-form />
    </x-settings.layout>
</section> --}}
