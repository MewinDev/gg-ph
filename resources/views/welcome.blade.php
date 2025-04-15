<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ asset('images/gg-ph-logo.png') }}">
        <title>GG PH</title>
        @vite('resources/css/app.css', 'resources/js/app.js')
    </head>
    <body class="antialiased font-abz">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-blue-500 selection:text-white">

            <section class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex items-center justify-center gap-5">
                    <x-application-logo class="w-32 rounded-xl"/>
                    <h1 class="sm:block hidden font-extrabold text-gray-700 dark:text-white text-6xl uppercase">
                        Good <br>
                        <span class="flex items-end">Go<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="text-blue-500 w-16">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg> PH
                        </span>
                    </h1>    
                </div>
                
                <div class="mt-5">
                    <div class="flex flex-col space-y-3">
                        @if (Route::has('login'))
                            @auth
                                <x-contents.admin>
                                    <x-forms.link href="{{ route('dashboard') }}" size="xl" color='gray' extraClass='uppercase'>Dashboard</x-forms.link>
                                </x-contents.admin>
                            @else
                                <x-forms.link href="{{ route('login') }}" size="xl" color='gray' extraClass='uppercase'>Log In</x-forms.link>
                                <x-forms.link href="{{ route('dashboard') }}" size='xl' color='gray' extraClass='uppercase'>List of Candidates  </x-forms.link>
                            @endauth
                        @endif
                        <x-forms.button size='xl' color='gray' extraClass='uppercase'>Sample Voting Ballots</x-forms.button>
                    </div>
                </div>

            </section>
        </div>
    </body>
</html>
