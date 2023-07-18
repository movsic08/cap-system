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

<body
    class="font-sans text-gray-50 bg-no-repeat bg-cover bg-[url('https://images.pexels.com/photos/9614109/pexels-photo-9614109.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')] antialiased">
    <div class="fixed -z-[40] inset-0 bg-black/50"></div>
    @include('landingpage.navigation')
    <div class="pt-6 flex flex-col sm:justify-center items-center">
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 z-[50]  shadow-md overflow-hidden sm:rounded-lg rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-30 border border-[#eee]">
            {{ $slot }}
        </div>
    </div>
</body>

</html>