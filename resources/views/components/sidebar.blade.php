{{-- Sidebar Header --}}
<header class="flex justify-between items-center mb-4 pr-3 sm:px-2">
    <a href="{{ route('dashboard') }}">
        <img class="h-[80px]" src="{{ asset('logo.png') }}" alt="logo">
    </a>
</header>

<nav class="space-y-3">
    <div>
        <ul class="mt-3">

            <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <div class="flex items-center">
                    <svg class="w-5 h-5  transition duration-75 {{ request()->routeIs('dashboard') ? 'text-[#68BC53]' : 'text-[#b9adad]' }}"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                        <path
                            d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                        <path
                            d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span
                        class="text-sm {{ request()->routeIs('dashboard') ? 'text-[#68BC53]' : 'text-[#b9adad]' }} font-medium ml-3 lg:opacity-100 2xl:opacity-100 duration-200">
                        {{ __('Dashboard') }}
                    </span>
                </div>
            </x-sidebar-link>

            <x-sidebar-link :href="route('organizations.index')" :active="request()->routeIs('organizations.*')">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="w-5 h-5  transition duration-75 {{ request()->routeIs('organizations.*') ? 'text-[#68BC53]' : 'text-[#b9adad]' }}">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                    </svg>
                    <span
                        class="text-sm {{ request()->routeIs('organizations.*') ? 'text-[#68BC53]' : 'text-[#b9adad]' }} font-medium ml-3 lg:opacity-100 2xl:opacity-100 duration-200">
                        {{ __('Organizations') }}
                    </span>
                </div>
            </x-sidebar-link>

            <x-sidebar-link :href="route('member.index')" :active="request()->routeIs('member.*')">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="w-5 h-5  transition duration-75 {{ request()->routeIs('member.*') ? 'text-[#68BC53]' : 'text-[#b9adad]' }}">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>

                    <span
                        class="text-sm {{ request()->routeIs('member.*') ? 'text-[#68BC53]' : 'text-[#b9adad]' }} font-medium ml-3 lg:opacity-100 2xl:opacity-100 duration-200">
                        {{ __('Members') }}
                    </span>
                </div>
            </x-sidebar-link>

            <x-sidebar-link :href="route('donations.index')" :active="request()->routeIs('donations.*')">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="w-5 h-5  transition duration-75 {{ request()->routeIs('donations.*') ? 'text-[#68BC53]' : 'text-[#b9adad]' }}">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span
                        class="text-sm {{ request()->routeIs('donations.*') ? 'text-[#68BC53]' : 'text-[#b9adad]' }} font-medium ml-3 lg:opacity-100 2xl:opacity-100 duration-200">
                        {{ __('Donations') }}
                    </span>
                </div>
            </x-sidebar-link>

            <x-sidebar-link :href="route('requested-schedules.index')"
                :active="request()->routeIs('requested-schedules.*')">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor"
                        class="w-5 h-5  transition duration-75 {{ request()->routeIs('requested-schedules.*') ? 'text-[#68BC53]' : 'text-[#b9adad]' }}">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>

                    <span
                        class="text-sm {{ request()->routeIs('requested-schedules.*') ? 'text-[#68BC53]' : 'text-[#b9adad]' }} font-medium ml-3 lg:opacity-100 2xl:opacity-100 duration-200">
                        {{ __('Requested Schedules') }}
                    </span>
                </div>
            </x-sidebar-link>
        </ul>
    </div>
</nav>