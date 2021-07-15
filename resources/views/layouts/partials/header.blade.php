<header>
    
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Inicio') }}
        </x-nav-link>
        <x-nav-link :href="route('pokemones.index')" :active="request()->routeIs('pokemones.index')">
            {{ __('Pokedex') }}
        </x-nav-link>
    </div>
</header>