@props(['mainClass' => '', 'title' => 'OneUp Gym - Tu mejor versión te espera'])

<x-custom.head>{{ $title }}</x-custom.head>

<body class="bg-gym-bg min-h-screen flex flex-col">

    <x-custom.app-header />

    <main class="flex-grow min-h-[80vh] {{ $mainClass }}">
        {{ $slot }}
    </main>

    <x-custom.app-footer />
    
</body>
