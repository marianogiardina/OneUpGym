@props(['membresias', 'valorMensual'])

<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-lg shadow-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gym-primary text-white">
                    <tr>
                        <th class="px-6 py-4 text-left">Plan</th>
                        <th class="px-6 py-4 text-center">Precio Mensual</th>
                        <th class="px-6 py-4 text-center">Precio Original</th>
                        <th class="px-6 py-4 text-center">Ahorro Mensual</th>
                        <th class="px-6 py-4 text-center">Ahorro Anual</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($membresias as $membresia)
                        
                        @php
                            //defino una variable para el precio mensual de cada membresia
                            $precioMensual = $membresia->precio / $membresia->duracion_meses;
                        @endphp

                        <tr class="hover:bg-gray-50 {{ $membresia->tipo == 'anual' ? 'bg-gym-accent bg-opacity-10' : '' }}">
                            <td class="px-6 py-4 font-medium text-gym-primary">{{ucfirst($membresia->tipo)}}
                                @if ($membresia->tipo == 'anual')
                                    <span class="ml-2 bg-gym-accent text-white px-2 py-1 rounded-full text-xs">Más Popular</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-center font-bold">${{number_format($precioMensual, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 text-center text-gray-500 {{$membresia->tipo != 'mensual' ? 'line-through' : ''}}">${{number_format($valorMensual, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 text-center {{ $membresia->tipo == 'mensual' ? 'text-gray-500' : ($membresia->tipo == 'semestral' ? 'text-green-600 font-medium' : 'text-green-600 font-bold') }}">
                                ${{ number_format($valorMensual - ($precioMensual), 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 text-center {{ $membresia->tipo == 'mensual' ? 'text-gray-500' : ($membresia->tipo == 'semestral' ? 'text-green-600 font-medium' : 'text-green-600 font-bold') }}">
                                ${{ number_format(($valorMensual * 12) - ($precioMensual * 12), 0, ',', '.') }}
                            </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>