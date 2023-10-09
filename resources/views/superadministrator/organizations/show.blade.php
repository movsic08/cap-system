<x-app-layout>
    <header class="text-center mb-6">
        <h2 class="font-semibold text-xl">{{ $organization->organization_name }}</h2>
    </header>
    <div class="grid grid-cols-12 gap-2">
        @foreach ($organization->members as $member)
        <div class="w-full col-span-4 bg-white border border-gray-200 rounded-lg shadow ">
            <div class="flex flex-col items-center py-10">
                <img class="w-16 h-16 mb-3 rounded-full shadow-lg" src="{{ asset('logo.png') }}"
                    alt="St. Joseph Cathedral Parish" />
                <h5 class="mb-1 text-xl font-medium text-gray-900 ">{{ $member->name }}</h5>
                <span class="text-sm text-gray-500 ">{{ $member->member_id }}</span>
                <div class="flex mt-4 space-x-3 md:mt-6">
                    <a href="{{ route('member.show', $member->id) }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        More Details
                    </a>
                    <a href="tel:{{ $member->phone_number }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 ">Message</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</x-app-layout>