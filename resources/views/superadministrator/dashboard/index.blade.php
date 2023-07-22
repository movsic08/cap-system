<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="grid grid-cols-12 gap-2">
        @include('superadministrator.dashboard.partials.stat-cards')
    </div>
</x-app-layout>
