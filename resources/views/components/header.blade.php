<header class="relative">
    <!-- Barra superior -->
    <div class="flex items-center justify-between bg-zinc-300 dark:bg-zinc-900 px-5 md:px-8 py-3 shadow-xl">
        <!-- Botón menú móvil -->
        <button type="button" id="toggleButton"
            class="block md:hidden p-1 rounded-md hover:bg-zinc-400 dark:hover:bg-zinc-700 transition-colors"
            aria-label="Toggle menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 6l16 0" />
                <path d="M4 12l16 0" />
                <path d="M4 18l16 0" />
            </svg>
        </button>

        <!-- Logo/Branding para móvil -->
        <div class="md:hidden">
            <h1 class="text-2xl font-bold text-blue-600 dark:text-blue-400">PV</h1>
        </div>

        <!-- Controles de la derecha -->
        <div class="flex items-center gap-4 w-full justify-end">
            <!-- Notificaciones -->
            <button class="p-2 relative rounded-md hover:bg-zinc-400 dark:hover:bg-zinc-700 transition-colors"
                aria-label="Notifications">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-bell">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                </svg>
                <span
                    class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
            </button>
            <!-- Cambio de tema
            <button id="themeToggle"
                class="p-2 rounded-md bg-zinc-200 dark:bg-zinc-700 hover:bg-zinc-300 dark:hover:bg-zinc-600 transition"
                aria-label="Toggle theme">
                <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-sun">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                    <path
                        d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                </svg>
                <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-moon hidden">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                </svg>
            </button>-->

            <!-- Menú usuario (desktop) -->
            <div class="hidden md:block">
                @livewire('navigation-menu')
            </div>
        </div>
    </div>

    <!-- Menú lateral -->
    <nav id="nav"
        class="bg-zinc-300 dark:bg-zinc-900 w-72 fixed top-0 left-0 h-screen shadow-xl transition-all duration-300 ease-in-out transform -translate-x-full md:translate-x-0 z-30 ">
        <!-- Encabezado del menú -->
        <div class="pt-6 pb-4 px-5 border-b border-zinc-400 dark:border-zinc-700">
            <h1 class="text-3xl text-center font-bold text-blue-600 dark:text-blue-400">Punto Venta</h1>
            <p class="text-center text-sm text-zinc-600 dark:text-zinc-400 mt-1">Sistema de gestión comercial</p>
        </div>

        <!-- Menú de navegación -->
        <div class="overflow-y-auto md:h-[calc(100vh-180px)] py-4 px-3">
            <ul class="flex flex-col gap-2">
                <!-- Dashboard -->
                <li>
                    <a class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors
                        {{ request()->routeIs('admin.paneles.admin') || request()->routeIs('empleado.paneles.empleados')
                            ? 'bg-blue-500 text-white border-l-4 border-blue-300'
                            : 'text-zinc-800 dark:text-zinc-200 hover:bg-zinc-400 dark:hover:bg-zinc-700' }}"
                        href="{{ Auth::user()->id_tipo_usuario == 1 ? route('admin.paneles.admin') : ( Auth::user()->id_tipo_usuario == 2 ? route('empleado.paneles.empleados') : route('welcome')) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                            <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                            <path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                            <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                        </svg>
                        <span class="font-medium">{{ __('Dashboard') }}</span>
                    </a>
                </li>
                @foreach ($rutas as $ruta)
                    <li>
                        <a href="{{ route($ruta['route']) }}"
                            class="flex items-center gap-3 px-4 py-3 text-zinc-800 dark:text-zinc-200 rounded-lg hover:bg-zinc-400 dark:hover:bg-zinc-700 transition-colors ">
                            {!! file_get_contents(public_path($ruta['img'])) !!}
                            <span class="font-medium">{{ $ruta['name'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Pie del menú (usuario) -->
        <div
            class="md:absolute bottom-0 left-0 right-0  md:bg-zinc-400/30 md:dark:bg-zinc-800/50 p-4 border-t border-zinc-300 dark:border-zinc-700">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <!-- Información del usuario -->
                <div class="flex items-center gap-3 w-full md:w-auto">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="shrink-0">
                            <img class="size-10 rounded-full object-cover border-2 border-white dark:border-zinc-600"
                                src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif

                    <div class="overflow-hidden">
                        <div class="font-medium text-zinc-800 dark:text-zinc-200 truncate">{{ Auth::user()->name }}
                        </div>
                        <div class="text-sm text-zinc-600 dark:text-zinc-400 truncate">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <!-- Botones (diferentes según dispositivo) -->
                <div class="flex items-center gap-3 w-full md:w-auto justify-between md:justify-normal">
                    <!-- Perfil (solo en mobile) -->
                    <a href="{{ route('profile.show') }}"
                        class="md:hidden text-sm text-zinc-700 dark:text-zinc-300 font-medium px-3 py-1 rounded-md transition-colors hover:bg-zinc-200 dark:hover:bg-zinc-700">
                        Perfil
                    </a>

                    <!-- Cerrar sesión (siempre visible pero con diferente estilo) -->
                    <a href="{{ route('logout') }}"
                        class="text-sm font-medium px-3 py-1 rounded-md transition-colors md:hidden
                    md:text-zinc-700 md:dark:text-zinc-300 md:hover:bg-zinc-400/50 md:dark:hover:bg-zinc-700/50
                    text-white bg-red-500 hover:bg-red-600 dark:hover:bg-red-600 md:bg-transparent md:dark:bg-transparent"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar Sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Fondo oscuro para móvil -->
    <div id="box_shadow" class="fixed inset-0 bg-black/50 z-20 hidden md:hidden"></div>
</header>
