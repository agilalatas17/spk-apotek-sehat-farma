<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Apotek Farma') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white min-h-screen">
    <div class="flex flex-col md:flex-row min-h-screen">
        @include('layouts.admin.sidebar')

        <!-- Page Content -->
        <main class="flex-1 p-auto overflow-y-auto">
            @if (isset($header))
                <header class="mb-4">
                    <h1 class="text-2xl font-semibold text-black">
                        {{ $header }}
                    </h1>
                </header>
            @endif

            {{ $slot }}
        </main>
    </div>

</body>

</html>
