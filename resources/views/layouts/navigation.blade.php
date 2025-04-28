<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-8xl mx-auto">
        <div class="flex justify-between h-16 mx-5 md:mx-10 lg:mx-0">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center gap-3">
                    <a href="/">
                    <x-application-logo class="block h-10 md:h-12 rounded-lg w-auto" />
                    </a>
                    <h1 class="sm:hidden flex font-extrabold text-gray-700 dark:text-white text-2xl uppercase">
                    Good 
                    Go<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="6" stroke="currentColor" class="text-blue-500 w-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                    </svg> <span class="ml-2">PH</span>
                    </h1>  
                </div>

                <!-- Navigation Links -->
                <div class="hidden no-scrollbar space-x-8 sm:-my-px sm:ms-5 sm:flex font-bold uppercase whitespace-nowrap overflow-auto">
                    <x-navs.nav-link :href="route('dashboard')" :active="Str::contains(request()->url(), 'dashboard')">
                    {{ __('Dashboard') }}
                    </x-navs.nav-link>
                    @foreach ($electionTypes as $type)
                        <x-navs.nav-link :href="route('candidates.index', $type)" :active="Str::contains(urldecode(request()->url()), urldecode($type))">
                            {{ $type }} Candidates
                        </x-navs.nav-link>
                    @endforeach
                </div>
            </div>

            <!-- Settings Dropdown -->
            <x-contents.admin>
                <div class="hidden sm:flex sm:items-center whitespace-nowrap">
                    <x-navs.dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>
            
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        </button>
                    </x-slot>
            
                    <x-slot name="content">
                        <x-navs.dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                        </x-navs.dropdown-link>
            
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
            
                        <x-navs.dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-navs.dropdown-link>
                        </form>
                    </x-slot>
                    </x-dropdown>
                </div>
            </x-contents.admin>

            <!-- Hamburger and dark-light-theme -->
            <div class="flex items-center">
                <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 dark:focus:ring-gray-900 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                    </svg>
                </button>
                <button @click="open = ! open" class="sm:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
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
                <x-navs.responsive-nav-link :href="route('dashboard')" :active="Str::contains(request()->url(), 'dashboard')">
                    {{ __('Dashboard') }}
                </x-navs.responsive-nav-link>
                @foreach ($electionTypes as $type)
                    <x-navs.nav-link :href="route('candidates.index', $type)" :active="Str::contains(request()->url(), $type)">
                        {{ $type }} Candidates
                    </x-navs.nav-link>
                @endforeach
            </div>
    
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ (Auth::check()) ? Auth::user()->name : 'Guest' }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ (Auth::check()) ? Auth::user()->email : '' }}</div>
                </div>
    
                <div class="mt-3 space-y-1">
                    <x-contents.admin>
                        <x-navs.responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-navs.responsive-nav-link>
                    </x-contents.admin>
    
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-navs.responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-navs.responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
</nav>
