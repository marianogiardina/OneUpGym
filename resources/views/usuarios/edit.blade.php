<x-custom.template>
    <div class="w-full max-w-md sm:max-w-lg lg:max-w-xl mx-auto mt-28 mb-14">
        <div class="bg-white rounded-lg shadow-xl overflow-hidden">
            <div class="px-6 py-8 sm:px-8 text-center">
                <div class="mx-auto w-16 h-16 bg-gym-accent rounded-full flex items-center justify-center mb-4">
                    <svg class="w-8 h-8 text-gym-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                        </path>
                    </svg>
                </div>
                <h2 class="text-2xl sm:text-3xl font-bold text-gym-primary mb-2">Editar Usuario {{ $user->name }}</h2>
                <p class="text-gray-600 text-sm sm:text-base">Edita la información del usuario.</p>
            </div>



            <div class="px-6 pb-8 sm:px-8">
                <form method="POST" action="{{ route('usuarios.update', $user) }}" class="space-y-6">
                    @csrf
                    @method('PUT')


                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nombre <span
                                    class="text-red-500">*</span></label>
                            <input name="name" type="text" value="{{ old('name', $user->name) }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary"
                                placeholder="Nombre" />
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Apellido <span
                                    class="text-red-500">*</span></label>
                            <input name="lastname" type="text" value="{{ old('lastname', $user->lastname) }}"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary"
                                placeholder="Apellido" />
                            @error('lastname')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Correo
                            Electrónico <span class="text-red-500">*</span></label>
                        <input name="email" type="email" value="{{ old('email', $user->email) }}"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gym-primary"
                            placeholder="mail@example.com" />
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="rol" class="block text-sm font-medium text-gray-700 mb-2">Rol <span
                                class="text-red-500">*</span></label>
                        <select name="rol" id="rol"
                            class="w-full px-3 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary text-sm sm:text-base">
                            <option value="">Selecciona un rol</option>
                            <option value="0" {{ old('rol', $user->rol->value) == 0 ? 'selected' : '' }}>Usuario
                            </option>
                            <option value="1" {{ old('rol', $user->rol->value) == 1 ? 'selected' : '' }}>Profesor
                            </option>
                            <option value="2" {{ old('rol', $user->rol->value) == 2 ? 'selected' : '' }}>
                                Administrador</option>



                        </select>
                        @error('rol')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="celular" class="block text-sm font-medium text-gray-700 mb-2">Teléfono</label>
                        <input name="celular" type="tel" value="{{ old('celular', $user->celular) }}"
                            class="w-full px-3 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary text-sm sm:text-base"
                            placeholder="+54 9 11 1234-5678" />
                        @error('celular')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-700 mb-2">Fecha de
                            Nacimiento <span class="text-red-500">*</span></label>
                        <input name="fecha_nacimiento" type="date"
                            value="{{ old('fecha_nacimiento', $user->fecha_nacimiento) }}"
                            class="w-full px-3 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary text-sm sm:text-base" />
                        @error('fecha_nacimiento')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="peso" class="block text-sm font-medium text-gray-700 mb-2">Peso <span
                                    class="text-gray-400 text-xs">(opcional)</span></label>
                            <input name="peso" type="number" min="0" value="{{ old('peso', $user->peso) }}"
                                class="w-full px-3 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary text-sm sm:text-base"
                                placeholder="kg" />
                            @error('peso')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="altura" class="block text-sm font-medium text-gray-700 mb-2">Altura <span
                                    class="text-gray-400 text-xs">(opcional)</span></label>
                            <input name="altura" type="number" min="100"
                                value="{{ old('altura', $user->altura) }}"
                                class="w-full px-3 py-3 sm:py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-gym-secondary focus:border-gym-secondary text-sm sm:text-base"
                                placeholder="cm" />
                            @error('altura')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center justify-end">
                        <x-buttons.btn-user-form>
                            Editar Usuario
                        </x-buttons.btn-user-form>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-custom.template>
