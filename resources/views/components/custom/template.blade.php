@props(['mainClass' => ''])

<x-custom.head></x-custom.head>
{{-- -- x-headimportante, tiene la config de tailwind y los colores del gym -- --}}
<body class="bg-gym-bg min-h-screen">

    <x-custom.app-header></x-custom.app-header>

    <main class="{{ $mainClass }}">
        {{$slot}}
    </main>

    <x-custom.app-footer></x-custom.app-footer>

</body>
