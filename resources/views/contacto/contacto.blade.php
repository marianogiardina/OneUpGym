<x-custom.template>

    <section class="bg-gradient-to-br from-gym-primary via-gym-secondary to-gym-primary pt-24 pb-16">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Contáctanos
                </h1>
                <p class="text-white text-lg md:text-xl opacity-90 max-w-2xl mx-auto">
                    Estamos aquí para ayudarte a comenzar tu transformación. ¡Ponte en contacto con nosotros!
                </p>
            </div>
        </div>
    </section>

    
    <section class="py-16">
        <div class="container mx-auto px-6 lg:px-12">
            @if (session('success'))
                <x-alerts.success>{{ session('success') }}</x-alerts.success>
            @endif  
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                
                <div class="bg-white rounded-lg shadow-xl p-8 flex flex-col ">
                    <h2 class="text-2xl font-bold text-gym-primary mb-6">Envíanos un mensaje</h2>
                    <form class="space-y-6" action="{{ route('contacto.store') }}" method="POST">
                        @csrf                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="nombre" class="block text-sm font-medium text-gym-primary mb-2">
                                    Nombre 
                                </label>
                                <input type="text" id="nombre" name="nombre" required value="{{ old('nombre') }}"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gym-accent focus:border-gym-accent transition-colors"
                                    placeholder="Tu nombre"
                                />
                                @error('nombre')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror

                            </div>
                            <div>
                                <label for="apellido" class="block text-sm font-medium text-gym-primary mb-2">
                                    Apellido 
                                </label>
                                <input type="text" id="apellido" name="apellido" required value="{{ old('apellido') }}"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gym-accent focus:border-gym-accent transition-colors"
                                    placeholder="Tu apellido"
                                />
                                @error('apellido')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="mail" class="block text-sm font-medium text-gym-primary mb-2">
                                Mail 
                            </label>
                            <input type="email"  name="mail" required value="{{ old('mail') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gym-accent focus:border-gym-accent transition-colors"
                                placeholder="tu@mail.com"
                            />
                            @error('mail')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="celular" class="block text-sm font-medium text-gym-primary mb-2">
                                Celular
                            </label>
                            <input type="tel"  name="celular" value="{{ old('celular') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gym-accent focus:border-gym-accent transition-colors"
                                placeholder="+54 11 1234-5678"
                            />
                            @error('celular')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="asunto" class="block text-sm font-medium text-gym-primary mb-2">
                                Asunto 
                            </label>
                            <select  name="asunto" required value="{{ old('asunto') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gym-accent focus:border-gym-accent transition-colors">
                                <option value="">Selecciona un asunto</option>
                                <option value="membership">Información sobre membresías</option>
                                <option value="classes">Consulta sobre clases</option>
                                <option value="personal-training">Consulta sobre personal</option>
                                <option value="other">Otro</option>
                            </select>
                            @error('asunto')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="mensaje" class="block text-sm font-medium text-gym-primary mb-2">
                                Mensaje 
                            </label>
                            <textarea id="mensaje" name="mensaje" rows="5" required value="{{ old('mensaje') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gym-accent focus:border-gym-accent transition-colors resize-none"
                                placeholder="Cuéntanos cómo podemos ayudarte...">
                            </textarea>
                            @error('mensaje')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>


                        <button type="submit"
                            class="w-full bg-gym-accent hover:bg-gym-accent-dark text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-300 shadow-lg hover:shadow-xl">
                            Enviar Mensaje
                        </button>

                    </form>
                </div>

                
                <div class="space-y-8">

                    <div class="bg-white rounded-lg shadow-xl p-8">
                        <h2 class="text-2xl font-bold text-gym-primary mb-6">Información de contacto</h2>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div
                                    class="bg-gym-accent w-12 h-12 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gym-primary mb-1">Dirección</h3>
                                    <p class="text-gray-600">Av. Corrientes 2037 <br>CABA, Argentina</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div
                                    class="bg-gym-accent w-12 h-12 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gym-primary mb-1">Teléfono</h3>
                                    <p class="text-gray-600">+54 11 3952-9943
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div
                                    class="bg-gym-accent w-12 h-12 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gym-primary mb-1">Email</h3>
                                    <p class="text-gray-600">info@oneupgym.com<br>contacto@oneupgym.com</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="bg-white rounded-lg shadow-xl p-8">
                        <h2 class="text-2xl font-bold text-gym-primary mb-6">Horarios de atención</h2>
                        <div class="space-y-3">
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="font-medium text-gym-primary">Lunes - Viernes</span>
                                <span class="text-gray-600">8:00 HS - 23:00 HS</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="font-medium text-gym-primary">Sábados</span>
                                <span class="text-gray-600">9:00 HS - 20:00 HS</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="font-medium text-gym-primary">Días festivos</span>
                                <span class="text-gray-600">8:00 HS - 14:00 HS</span>
                            </div>
                        </div>
                    </div>

                    
                    <div class="bg-white rounded-lg shadow-xl p-8">
                        <h2 class="text-2xl font-bold text-gym-primary mb-6">Síguenos</h2>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="bg-gym-accent hover:bg-gym-accent-dark w-12 h-12 rounded-full flex items-center justify-center transition-colors duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>

                            <a href="#"
                                class="bg-gym-accent hover:bg-gym-accent-dark w-12 h-12 rounded-full flex items-center justify-center transition-colors duration-300">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-custom.template>