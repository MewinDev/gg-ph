<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- SEO Meta Tags --}}
        <title>@yield('title', 'GoodGov PH')</title>
        <meta name="description" content="@yield('meta_description', 'Learn more about GoodGov PH, a platform for transparent and participatory governance in the Philippines.')">
        <meta name="keywords" content="@yield('meta_keywords', 'good governance, transparency, public service, Philippines government, GG PH')">

        {{-- Canonical URL --}}
        <link rel="canonical" href="{{ url()->current() }}"/>

        {{-- Open Graph Meta for Social Sharing --}}
        <meta property="og:title" content="About GoodGov PH">
        <meta property="og:description" content="Meet the minds behind GoodGov PH and our mission to empower citizens through digital governance tools.">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ asset('images/gg-ph-logo.png') }}">

        {{-- Twitter Cards --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="About Us - GoodGov PH">
        <meta name="twitter:description" content="Our mission is to promote good governance and civic engagement in the Philippines.">
        <meta name="twitter:image" content="{{ asset('images/gg-ph-logo.png') }}">

        {{-- Favicon --}}
        <link rel="icon" href="{{ asset('images/gg-ph-logo.png') }}" type="image/x-icon">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased font-abz bg-clip-text bg-gradient-to-r to-blue-100 from-blue-50">
        <div class="min-h-screen dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main class="xl:max-w-8xl 3xl:max-w-9xl mx-auto p-3">
                {{ $slot }}
            </main>
        </div>
        @stack('scripts')
    </body>

    <footer class="z-20 w-full p-4 bg-white border-t border-gray-200 shadow-sm md:flex md:items-center md:justify-center md:p-5 dark:bg-gray-800 dark:border-gray-600">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ now()->year }} <a href="/" class="hover:underline">GG PH</a>. All Rights Reserved.</span>
    </footer>

</html>
