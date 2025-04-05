<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO para dashboard -->
    <title>Panel de Control | {{ config('app.name', 'Sistema de Ventas') }}</title>
    <meta name="description" content="Panel de administración y estadísticas de ventas">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Panel de Control | {{ config('app.name', 'Sistema de Ventas') }}">
    <meta property="og:description" content="Panel de administración con métricas clave del negocio">

    <!-- Favicon y theme-color -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <meta name="theme-color" content="#3b82f6" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#1e3a8a" media="(prefers-color-scheme: dark)">

    <!-- Preconexiones -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts y Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- Script de tema oscuro sin flash -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }
    </script>
</head>

<body class="font-sans antialiased bg-zinc-50 dark:bg-zinc-900 text-zinc-800 dark:text-zinc-200 min-h-screen flex flex-col">
    <x-header />

    <main class="flex-grow px-4 sm:px-6 md:ml-72 py-6 md:py-8">
        <!-- Header del dashboard -->
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold">Panel de Control</h1>
                    <p class="text-zinc-600 dark:text-zinc-400 mt-1">Resumen de métricas y actividades</p>
                </div>

                <!-- Selector de rango de fechas -->
                <div class="flex items-center gap-3">
                    <div class="relative">
                        <select class="bg-white dark:bg-zinc-800 border border-zinc-300 dark:border-zinc-600 rounded-md py-2 pl-3 pr-8 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>Hoy</option>
                            <option>Esta semana</option>
                            <option selected>Este mes</option>
                            <option>Este año</option>
                            <option>Personalizado</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Grid de métricas -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <!-- Tarjeta de Ventas -->
                <div class="bg-white dark:bg-zinc-800 rounded-lg shadow p-4 border border-zinc-200 dark:border-zinc-700">
                    <div class="flex items-center justify-between">
                        <h3 class="text-zinc-500 dark:text-zinc-400 text-sm font-medium">Ventas totales</h3>
                        <div class="p-1 rounded-full bg-green-100 dark:bg-green-900/50">
                            <svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-2">
                        <p class="text-2xl font-semibold">$24,780</p>
                        <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-1"><span class="text-green-600 dark:text-green-400">+12.5%</span> vs mes anterior</p>
                    </div>
                </div>

                <!-- Otras tarjetas de métricas... -->
            </div>

            <!-- Gráficos y tablas -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Gráfico principal -->
                <div class="lg:col-span-2 bg-white dark:bg-zinc-800 rounded-lg shadow p-4 border border-zinc-200 dark:border-zinc-700">
                    <h3 class="text-lg font-medium mb-4">Ventas por día</h3>
                    <div class="h-64">
                        <!-- Aquí iría tu gráfico (Chart.js, ApexCharts, etc.) -->
                        <div class="flex items-center justify-center h-full bg-zinc-100 dark:bg-zinc-700/50 rounded">
                            <p class="text-zinc-500 dark:text-zinc-400">Gráfico de ventas</p>
                        </div>
                    </div>
                </div>

                <!-- Últimas transacciones -->
                <div class="bg-white dark:bg-zinc-800 rounded-lg shadow p-4 border border-zinc-200 dark:border-zinc-700">
                    <h3 class="text-lg font-medium mb-4">Últimas ventas</h3>
                    <div class="space-y-4">
                        <!-- Ejemplo de transacción -->
                        <div class="flex items-start">
                            <div class="bg-blue-100 dark:bg-blue-900/50 p-2 rounded-full mr-3">
                                <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="font-medium">Venta #10025</p>
                                <p class="text-sm text-zinc-500 dark:text-zinc-400">Hace 2 horas</p>
                            </div>
                            <div class="text-right">
                                <p class="font-medium">$1,250.00</p>
                                <p class="text-sm text-green-600 dark:text-green-400">Completada</p>
                            </div>
                        </div>
                        <!-- Más transacciones... -->
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />

    @livewireScripts
    <script src="{{ asset('js/modoColor.js') }}" defer></script>
    <script src="{{ asset('js/navResponsive.js') }}" defer></script>
</body>

</html>
