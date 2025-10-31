@props([
    'title' => 'ASTA Logistiek',
    'description' => 'Welkom bij ASTA Logistiek',
    'isAdmin' => false,
])

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description }}">

    <title>{{ $title }}</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    >
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Dynamically add additional meta --}}
    @stack('head')
</head>
