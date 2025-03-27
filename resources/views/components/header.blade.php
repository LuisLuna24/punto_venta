<header>
    <nav id="nav"
        class="bg-slate-300 dark:bg-slate-800 w-72 fixed top-0 left-0 h-screen shadow-md transition-all duration-300 overflow-hidden max-md:-translate-x-full z-20 px-5">
        <div class="pt-5 pb-10">
            <h1 class="text-4xl text-center font-bold text-blue-600 dark:text-blue-400">Punto Venta</h1>
        </div>
        <div class="w-full overflow-y-hidden px-4">
            <ul class="flex flex-col gap-5 mt-3">
                @foreach ($rutas as $ruta)
                    <li>{{ $ruta['name'] }}</li>
                @endforeach
                <li>
                    {{-- <a class="flex items-center text-xl gap-2  {{ request()->routeIs('*.panel') ? 'bg-blue-400 dark:bg-slate-600 border-2 border-blue-600 dark:border-blue-400' : 'bg-slate-200 dark:bg-slate-700' }} rounded-md px-3 py-2 hover:bg-slate-400  dark:hover:bg-slate-600 ease-in duration-150"
                        @switch(Auth::user()->id_tipo_usuario)
                        @case(1)
                        href="{{ route('admin.admin.panel') }}"
                        @break
                        @case(2)
                        href="{{ route('doctor.doctor.panel') }}"
                        @break
                        @case(3)
                        href="{{ route('psicologo.psicologo.panel') }}"
                        @break
                        @case(4)
                        href="{{ route('nutiologo.nutiologo.panel') }}"
                        @break
                        @case(5)
                        href="{{ route('paciente.paciente.panel') }}"
                        @break
                        @endswitch>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                            <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                            <path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                            <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                        </svg>
                        <p>{{ __('Dashboard') }}</p>
                    </a> --}}
                </li>
            </ul>
            <ul class="flex flex-col gap-5 mt-3">
                <li>
                    {{-- <a href="{{ route('admin.control.usuarios') }}"
                        class="flex items-center text-xl gap-2  {{ request()->routeIs('admin.control.usuarios') ? 'bg-blue-400 dark:bg-slate-600 border-2 border-blue-600 dark:border-blue-400' : 'bg-slate-200 dark:bg-slate-700' }} rounded-md px-3 py-2 hover:bg-slate-400  dark:hover:bg-slate-600 ease-in duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                        </svg>
                        <p>{{ __('Users') }}</p>
                    </a> --}}
                </li>
                <li>
                    {{-- <a href="{{ route('admin.control.subscripciones') }}"
                        class="flex items-center text-xl gap-2  {{ request()->routeIs('admin.control.subscripciones') ? 'bg-blue-400 dark:bg-slate-600 border-2 border-blue-600 dark:border-blue-400' : 'bg-slate-200 dark:bg-slate-700' }} rounded-md px-3 py-2 hover:bg-slate-400  dark:hover:bg-slate-600 ease-in duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-calendar">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z" />
                            <path d="M16 3v4" />
                            <path d="M8 3v4" />
                            <path d="M4 11h16" />
                            <path d="M11 15h1" />
                            <path d="M12 15v3" />
                        </svg>
                        <p>{{ __('Subscriptions') }}</p>
                    </a> --}}
                </li>
            </ul>
        </div>
        <div class="block md:hidden">
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600 ">
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="shrink-0 me-3">
                            <img class="size-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif

                    <div>
                        <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}
                        </div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Fondo para cerrar el menú al hacer clic fuera -->
    <div id="box_shadow" class="z-10 fixed left-0 right-0 top-0 bottom-0 bg-black/50 hidden md:hidden"></div>

    <div class="flex items-center justify-between md:justify-end   bg-slate-300 dark:bg-slate-800  px-5 md:px-10">
        <button type="button" id="toggleButton" class="block md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 6h16" />
                <path d="M7 12h13" />
                <path d="M10 18h10" />
            </svg>
        </button>
        <div class="flex items-center gap-5 md:gap-0 py-3 md:py-0">
            <div class="hidden md:block">
                @livewire('navigation-menu')
            </div>
            <button id="themeToggle" class="p-2 rounded-md bg-gray-200 dark:bg-gray-700 transition">
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
            </button>
        </div>
    </div>
</header>
