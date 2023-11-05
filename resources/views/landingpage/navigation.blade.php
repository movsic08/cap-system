<nav class="text-white z-[50] flex items-center justify-between px-4 sm:px-10 py-5 ">
    <div class="flex gap-6">
        <a class="font-semibold text-gray-600 sm:text-base text-sm hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500"
            href="{{ route('about.index') }}">
            About
        </a>
        <a class="font-semibold text-gray-600 sm:text-base text-sm hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500"
            href="{{ route('gallery-st-joseph-cathedral.index') }}">
            Gallery
        </a>
        <a class="font-semibold text-gray-600 sm:text-base text-sm hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500"
            href="{{ route('schedules.index') }}">
            Schedules
        </a>
    </div>
    <a href="/">
        <img class="h-[64px]" src="{{ asset('logo.png') }}" alt="logo">
    </a>
    <div class="flex gap-6">
        @if (Route::has('login'))
        <div>
            @auth
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-gray-600 sm:text-base text-sm hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500">Dashboard</a>
            @else
            <a href="{{ route('login') }}"
                class="font-semibold text-gray-600 sm:text-base text-sm hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500">Log
                in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 font-semibold text-gray-600 sm:text-base text-sm hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-yellow-500">Register</a>
            @endif
            @endauth
        </div>
        @endif
    </div>
</nav>