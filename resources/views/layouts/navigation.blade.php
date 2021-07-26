<link rel="stylesheet" type="text/css" href="css/style.css">

<nav x-data="{ open: false }" class="navbar navbar-light" style="background-color: #4fa1db8f;" >
    <!-- Primary Navigation Menu -->
    <div class="max-w-7x1 px-4 sm:px-7 lg:px-8">
        <div class="flex justify-between h-15">
            <div class="flex">

                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                
                <div class="hidden space-x-5 sm:ml-10 sm:flex" >

                    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                        {{ __('Inicio') }}
                    </x-nav-link>
                    <x-nav-link :href="route('pokemones.index')" :active="request()->routeIs('pokemones.index')">
                        {{ __('Pokedex') }}
                    </x-nav-link>
                    <x-nav-link :href="route('regiones.index')" :active="request()->routeIs('regiones.index')">
                        {{ __('Regiones') }}
                    </x-nav-link>
                        @guest
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                            {{ __('Iniciar sesion') }}
                        </x-nav-link>
                        <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                            {{ __('Registrar') }}
                        </x-nav-link>
                        @else
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown >
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
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                        @endguest     
                </div>
            </div>
        </div>
    </div>
</nav>
