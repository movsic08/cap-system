<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">Collection {{ $mass->mass }} ({{
            \Carbon\Carbon::parse($mass->date)->isoFormat('MMM D YYYY')}})</h2>
        @include('superadministrator.offertory.create-collection')
    </header>

    <div class="relative overflow-x-auto rounded">
        <table class="w-full text-sm text-left text-slate-400">
            <thead class="text-xs  uppercase bg-green-700 text-gray-100">
                <tr>

                    <th scope="col" class="px-6 py-3 rounded-l-lg">
                        First Collection
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Second Collection
                    </th>
                    <th scope="col" class="px-6 py-3 rounded-r-lg">
                        Special Collection
                    </th>
                    <th scope="col" class="px-6 py-3 rounded-r-lg">
                        TOTAL
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mass->collections as $collection)
                <tr class="bg-green-600 rounded text-white">

                    <td class="px-6 py-4">
                        {{ $collection->first_collection ?? 'No collection' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $collection->second_collection ?? 'No collection' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $collection->special_collection ?? 'No collection' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $collection->first_collection + $collection->second_collection +
                        $collection->special_collection }}
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    {{-- <div class="mt-4">
        {{ $donations->links() }}
    </div>
    --}}

</x-app-layout>