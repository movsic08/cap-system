<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">Organizations</h2>
        @include('superadministrator.organizations.create')
    </header>
    <div class="grid grid-cols-12 gap-2">
        @foreach ($organizations as $organization)
        <div
            class="flex flex-col col-span-full sm:col-span-6 xl:col-span-6 bg-white shadow-lg rounded-sm border border-slate-200">
            <a href="" class="px-5 py-5">
                <h2 class="text-lg font-semibold text-slate-800 mb-2">
                    {{ $organization->organization_name }}
                </h2>
                <p class="line-clamp-3">
                    {{ $organization->organization_details }}
                </p>
            </a>
        </div>
        @endforeach
    </div>
</x-app-layout>