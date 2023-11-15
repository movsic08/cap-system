<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'St. Joseph Cathedral Parsish') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|playfair-display-sc:400,700"
        rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core/main.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid/main.css" rel="stylesheet" />

    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none;
        }

        .show {
            display: block;
        }
    </style>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-inter antialiased bg-[#F0F4F8]">
    <div class="flex h-screen overflow-hidden">
        {{-- Sidebar/Navigation --}}
        <aside id="sidebar"
            class="flex bg-[#0F172A] flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 transform h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64  lg:!w-64 2xl:!w-64 shrink-0 p-4 transition-all duration-200 ease-in-out -translate-x-64">
            @include('components.sidebar')
        </aside>
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            {{-- Header --}}
            @include('components.header')
            {{-- Contents --}}
            <main>
                <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
                    <x-success-message />
                    <x-danger-message />
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>


    @stack('scripts')
</body>

</html>