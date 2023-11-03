<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col pt-6 sm:pt-0">
            <header class="bg-white shadow">
                <div class="max-w-7xl flex justify-center items-center py-6 px-4 sm:px-6 lg:px-8">
                    <a href="/">
                        <x-application-logo class="w-15 h-15" />
                    </a>
                </div>
            </header>

            <div class="px-6 py-4 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
            <div class="mt-[12rem] border-t border-gray-400">
                <x-footer></x-footer>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    </body>
</html>
