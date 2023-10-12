<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h2 class="text-center font-bold text-3xl uppercase mt-6 font-inter">Schedule an event</h2>
    <div class="grid mt-10 grid-cols-12 gap-6">
        <div class="h-[15rem] relative col-span-full sm:col-span-6 shadow rounded-lg bg-[#b17b16]">
            <img class="rounded-lg h-full w-full object-cover"
                src="https://images.pexels.com/photos/10630319/pexels-photo-10630319.jpeg?auto=compress&cs=tinysrgb&w=600"
                alt="">
            <div class="bg-black/30 rounded-lg inset-0 absolute"></div>
            <div class="absolute text-center top-[40%] w-full">
                <h2 class="text-3xl uppercase font-semibold text-white">Baptism</h2>
                <a href="{{ route('baptism.schedule-form') }}"
                    class="inline-block mt-4 rounded-md border border-transparent bg-[#b17b16] px-6 py-2 text-sm font-medium text-white hover:bg-[#926614]  focus:outline-none focus:ring-2 focus:ring-[#b17b16] focus:ring-offset-2">
                    Register form
                </a>
            </div>
        </div>
        <div class="h-[15rem] relative col-span-full sm:col-span-6 shadow rounded-lg bg-[#b17b16]">
            <img class="rounded-lg h-full w-full object-cover"
                src="https://images.pexels.com/photos/1295986/pexels-photo-1295986.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                alt="">
            <div class="bg-black/30 rounded-lg inset-0 absolute"></div>
            <div class="absolute text-center top-[40%] w-full">
                <h2 class="text-3xl uppercase font-semibold text-white">Wedding</h2>
                <a href="{{ route('wedding.schedule-form') }}"
                    class="inline-block mt-4 rounded-md border border-transparent bg-[#b17b16] px-6 py-2 text-sm font-medium text-white hover:bg-[#926614]  focus:outline-none focus:ring-2 focus:ring-[#b17b16] focus:ring-offset-2">
                    Register form
                </a>
            </div>
        </div>
        <div class="h-[15rem] relative col-span-full sm:col-span-6 shadow rounded-lg bg-[#b17b16]">
            <img class="rounded-lg h-full w-full object-cover"
                src="https://images.pexels.com/photos/3648308/pexels-photo-3648308.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                alt="">
            <div class="bg-black/30 rounded-lg inset-0 absolute"></div>
            <div class="absolute text-center top-[40%] w-full">
                <h2 class="text-3xl uppercase font-semibold text-white">Burial</h2>
                <a href="{{ route('burial.schedule-form') }}"
                    class="inline-block mt-4 rounded-md border border-transparent bg-[#b17b16] px-6 py-2 text-sm font-medium text-white hover:bg-[#926614]  focus:outline-none focus:ring-2 focus:ring-[#b17b16] focus:ring-offset-2">
                    Register form
                </a>
            </div>
        </div>
        <div class="h-[15rem] relative col-span-full sm:col-span-6 shadow rounded-lg bg-[#b17b16]">
            <img class="rounded-lg h-full w-full object-cover"
                src="https://images.pexels.com/photos/7219799/pexels-photo-7219799.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                alt="">
            <div class="bg-black/30 rounded-lg inset-0 absolute"></div>
            <div class="absolute text-center top-[40%] w-full">
                <h2 class="text-3xl uppercase font-semibold text-white">Blessings</h2>
                <a href="{{ route('blessing.schedule-form') }}"
                    class="inline-block mt-4 rounded-md border border-transparent bg-[#b17b16] px-6 py-2 text-sm font-medium text-white hover:bg-[#926614]  focus:outline-none focus:ring-2 focus:ring-[#b17b16] focus:ring-offset-2">
                    Register form
                </a>
            </div>
        </div>
        <div class="h-[15rem] relative col-span-full sm:col-span-6 shadow rounded-lg bg-[#b17b16]">
            <img class="rounded-lg h-full w-full object-cover"
                src="https://images.pexels.com/photos/3217150/pexels-photo-3217150.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                alt="">
            <div class="bg-black/30 rounded-lg inset-0 absolute"></div>
            <div class="absolute text-center top-[40%] w-full">
                <h2 class="text-3xl uppercase font-semibold text-white">Confirmation</h2>
                <a href="{{ route('confirmation.schedule-form') }}"
                    class="inline-block mt-4 rounded-md border border-transparent bg-[#b17b16] px-6 py-2 text-sm font-medium text-white hover:bg-[#926614]  focus:outline-none focus:ring-2 focus:ring-[#b17b16] focus:ring-offset-2">
                    Register form
                </a>
            </div>
        </div>
    </div>
</x-app-layout>