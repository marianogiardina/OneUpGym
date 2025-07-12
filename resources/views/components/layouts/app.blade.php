@props(['mainClass' => '', 'title' => 'OneUp Gym'])

<x-custom.head>{{ $title }}</x-custom.head>
{{-- -- x-headimportante, tiene la config de tailwind y los colores del gym -- --}}
<body class="min-h-screen">

    <x-custom.app-header></x-custom.app-header>

    <main class="mt-20 flex items-center justify-center min-h-screen py-8 px-4 sm:py-12 sm:px-6 lg:px-8">
        {{$slot}} 
    </main>

    <x-custom.app-footer></x-custom.app-footer>

    @livewireScripts

</body> 
