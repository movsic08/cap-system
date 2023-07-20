{{-- Sidebar Header --}}
<header class="flex justify-between items-center mb-4 pr-3 sm:px-2">
    <a href="{{ route('dashboard') }}">
        <img class="h-[80px]" src="{{ asset('logo.png') }}" alt="logo">
    </a>
</header>

<nav class="space-y-8">
    <div>
        <ul class="mt-3">
            <a href="{{ route('dashboard') }}"
                class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 bg-[#111] block text-slate-200 truncate transition duration-150 hover:text-slate-200">
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-gray-900 transition duration-75 dark:text-[#68BC53] group-hover:text-gray-900 dark:group-hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="text-sm font-medium ml-3 lg:opacity-100 2xl:opacity-100 duration-200">
                        {{ __('Dashboard') }}
                    </span>
                </div>
            </a>
        </ul>
    </div>
</nav>