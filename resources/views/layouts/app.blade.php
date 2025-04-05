<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- SEO Básico -->
        <title>@yield('title', 'Sistema de Ventas') | {{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="@yield('meta-description', 'Sistema de gestión de ventas y punto de venta')">
        <meta name="keywords" content="@yield('meta-keywords', 'ventas, punto de venta, sistema, gestión')">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="@yield('title', 'Sistema de Ventas')">
        <meta property="og:description" content="@yield('meta-description', 'Sistema de gestión de ventas y punto de venta')">
        <meta property="og:image" content="@yield('og-image', asset('img/og-default.jpg'))">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('title', 'Sistema de Ventas')">
        <meta name="twitter:description" content="@yield('meta-description', 'Sistema de gestión de ventas y punto de venta')">
        <meta name="twitter:image" content="@yield('og-image', asset('img/og-default.jpg'))">

        <!-- Favicon y theme-color -->
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
        <meta name="theme-color" content="#3b82f6" media="(prefers-color-scheme: light)">
        <meta name="theme-color" content="#1e3a8a" media="(prefers-color-scheme: dark)">

        <!-- Preconexión y precarga -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Preload de CSS crítico -->
        <link rel="preload" href="{{ asset('css/inputs.css') }}" as="style">

        <!-- Scripts con defer -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('css/inputs.css') }}" media="print" onload="this.media='all'">

        <!-- Script de tema oscuro sin bloqueo de render -->
        <script>
            // Detección temprana del tema para evitar flash de contenido
            if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia(
                    '(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        </script>
    </head>

    <body
        class="font-sans antialiased bg-zinc-50 dark:bg-zinc-900 text-zinc-800 dark:text-zinc-200 min-h-screen flex flex-col">
        <x-header />

        <main class="flex-grow px-4 sm:px-6 md:ml-72 py-6 md:py-8 transition-all duration-300" id="main-content" aria-labelledby="page-title">
            <div class="max-w-7xl mx-auto">
                <!-- Breadcrumbs mejorados para SEO y accesibilidad -->
                <nav class="mb-4 md:mb-6" aria-label="Ruta de navegación">
                    <ol class="flex flex-wrap items-center gap-2 text-sm">
                        <li class="flex items-center">
                            <a href="{{ url('/dashboard') }}" class="text-blue-600 dark:text-blue-400 hover:underline transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded">
                                Inicio
                            </a>
                        </li>
                        <li class="flex items-center text-zinc-500 dark:text-zinc-400" aria-hidden="true">
                            <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </li>
                        <li class="text-zinc-600 dark:text-zinc-300 font-medium" aria-current="page">
                            @yield('title')
                        </li>
                    </ol>
                </nav>

                <!-- Encabezado con mejor jerarquía -->
                <header class="mb-4">
                    <h1 id="page-title" class="text-3xl md:text-4xl font-bold text-zinc-800 dark:text-zinc-100">
                        @yield('title')
                    </h1>
                    @hasSection('subtitle')
                        <p class="mt-2 text-lg text-zinc-600 dark:text-zinc-400">
                            @yield('subtitle')
                        </p>
                    @endif
                </header>

                <!-- Contenido principal con mejor manejo de espacios -->
                <div class="w-full">
                    @yield('content')
                </div>
            </div>
        </main>

        <x-footer />

        <!-- Scripts no bloqueantes -->
        @livewireScripts
        <script src="{{ asset('js/modoColor.js') }}" defer></script>
        <script src="{{ asset('js/navResponsive.js') }}" defer></script>

        <!-- Google Analytics (ejemplo) -->
        @if (config('services.google_analytics.id'))
            <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_analytics.id') }}"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());
                gtag('config', '{{ config('services.google_analytics.id') }}');
            </script>
        @endif
    </body>

</html>
