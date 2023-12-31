<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">Requested Schedules</h2>
    </header>
    <div class="grid grid-cols-12 gap-2">
        <div
            class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
            <a href="{{ route('requested-baptism.index') }}" class="px-5 py-5">
                <h2 class="text-lg font-semibold text-slate-800 mb-2">Baptismal</h2>
                <div class="flex items-start">
                    <div class="text-3xl font-bold text-slate-800 mr-2">{{ $baptismalCount }}</div>
                </div>
            </a>
        </div>
        <div
            class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
            <a href="{{ route('requested-wedding.index') }}" class="px-5 py-5">
                <h2 class="text-lg font-semibold text-slate-800 mb-2">Wedding</h2>
                <div class="flex items-start">
                    <div class="text-3xl font-bold text-slate-800 mr-2">{{ $weddingCount }}</div>
                </div>
            </a>
        </div>
        <div
            class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
            <a href="{{ route('requested-burial.index') }}" class="px-5 py-5">
                <h2 class="text-lg font-semibold text-slate-800 mb-2">Burial</h2>
                <div class="flex items-start">
                    <div class="text-3xl font-bold text-slate-800 mr-2">{{ $burialCount }}</div>
                </div>
            </a>
        </div>
        <div
            class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
            <a href="{{ route('requested-blessing.index') }}" class="px-5 py-5">
                <h2 class="text-lg font-semibold text-slate-800 mb-2">Blessings</h2>
                <div class="flex items-start">
                    <div class="text-3xl font-bold text-slate-800 mr-2">{{ $blessingCount }}</div>
                </div>
            </a>
        </div>
        <div
            class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
            <a href="{{ route('requested-confirmation.index') }}" class="px-5 py-5">
                <h2 class="text-lg font-semibold text-slate-800 mb-2">Confirmation</h2>
                <div class="flex items-start">
                    <div class="text-3xl font-bold text-slate-800 mr-2">{{ $confirmationCount }}</div>
                </div>
            </a>
        </div>
    </div>
</x-app-layout>