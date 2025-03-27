<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Ventas')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('css/inputs.css') }}">
    </head>

    <body class="font-sans antialiased bg-slate-100 dark:bg-slate-900 text-slate-900 dark:text-slate-200">
        <x-header />

        <main class="px-5 md:ml-72 py-7 md:py-10">
            <div class="text-4xl font-bold">
                <h1>@yield('title')</h1>
            </div>
            <div class="mt-5 md:mt-10 w-full ">
                @yield('content')
            </div>
        </main>

        <x-footer />
        @livewireScripts
        <script src="{{ asset('js/modoColor.js') }}"></script>
        <script src="{{ asset('js/navResponsive.js') }}"></script>
    </body>

</html>
