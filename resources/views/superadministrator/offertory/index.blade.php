<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">Offertory</h2>
        @include('superadministrator.offertory.create-mass')
    </header>
    <div class="grid grid-cols-12 gap-2">
        @foreach ($masses as $mass)
        <div
            class="flex flex-col col-span-full sm:col-span-6 xl:col-span-6 bg-white shadow-lg rounded-sm border border-slate-200">
            <a href="{{ route('offertory.show', $mass) }}" class="px-5 py-5">
                <h2 class="text-lg font-semibold text-slate-800">
                    {{ $mass->mass }}
                </h2>
                <p class="my-1">{{ \Carbon\Carbon::parse($mass->date)->isoFormat('MMM D YYYY')}}</p>
                <p class="line-clamp-3">
                    {{ $mass->details }}
                </p>
            </a>
        </div>
        @endforeach
    </div>
</x-app-layout>