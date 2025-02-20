<!-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100  bg-gradient-to-r from-cyan-100 to-cyan-300"> -->
<nav 
    x-data="{ open: false }" 
    class="bg-white border-b border-gray-100 shadow-2xl fixed top-0 left-0 w-full z-50" 
    style="background-image: linear-gradient(to left, rgba(13,0,36,1) 0%, rgba(56,9,121,1) 100%, rgba(0,212,255,1) 100%);); box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.3);">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="flex justify-center h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                    <div>
                    <a href="{{ route('vacantes.publish') }}" 
                    class="text-white font-semibold bg-indigo-600 px-4 py-2 rounded-lg hover:bg-indigo-800 transition duration-200">
                        Publicar
                    </a>

            </div>
                </div>

                @auth
                    @can('create', App\Models\Vacante::class) 
                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('vacantes.index')" :active="request()->routeIs('vacantes.index')">
                                {{ __('Mis Vacantes') }}
                            </x-nav-link>
                            <x-nav-link :href="route('vacantes.create')" :active="request()->routeIs('vacantes.create')">
                                {{ __('Crear Vacante') }}
                            </x-nav-link>
                        </div>
                    @endcan
                @endauth
            </div>
            @auth
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
     
                    @can('create', App\Models\Vacante::class) 
                        <a class="mr-2 w-7 h-7 bg-indigo-600 hover:bg-indigo-800 rounded-full flex flex-col justify-center items-center text-sm font-extrabold text-white" href="{{ route('notificaciones') }}">
                            {{ auth()->user()->unreadNotifications->count() }}
                        </a>
                    @endcan

                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
 

                @guest
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('login')">
                            {{ __('Iniciar Sesión') }}
                        </x-nav-link>
                        <x-nav-link :href="route('register')">
                            {{ __('Crear Cuenta') }}
                        </x-nav-link>
                    </div>
                @endguest
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('vacantes.index')" :active="request()->routeIs('vacantes.index')">
                    {{ __('Mis Vacantes') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('vacantes.create')" :active="request()->routeIs('vacantes.create')">
                    {{ __('Crear Vacante') }}
                </x-responsive-nav-link>

                @if(auth()->user()->rol === 2)
                    <div class="flex gap-2 items-center p-3">
                        <a class=" w-7 h-7 bg-indigo-600 hover:bg-indigo-800 rounded-full flex flex-col justify-center items-center text-sm font-extrabold text-white" href="{{ route('notificaciones') }}">
                            {{ auth()->user()->unreadNotifications->count() }}
                        </a>
                        <p class="text-base font-medium text-gray-600">
                            @choice('Notificacion|Notificaciones', auth()->user()->unreadNotifications->count())
                        </p>
                    </div>
                @endif
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        <!-- @guest
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('login')">
                    {{ __('Iniciar Sesión') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')">
                    {{ __('Crear Cuenta') }}
                </x-responsive-nav-link>
            </div>
        @endguest -->
    </div>
@endauth
</nav>
