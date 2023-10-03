<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">Burial</h2>
    </header>

    <div class="relative overflow-x-auto rounded">
        <table class="w-full text-sm text-left text-slate-400">
            <thead class="text-xs  uppercase bg-green-700 text-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Deceased Name
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Family Name
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Email Address
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($burialRequestedSchedules as $burialRequestedSchedule)
                <tr class="bg-green-600 rounded text-white">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $burialRequestedSchedule->deceased_name }}+
                    </th>
                    <td class="px-6 py-4">
                        {{ $burialRequestedSchedule->family_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $burialRequestedSchedule->email }}
                    </td>
                    <td class="px-6 py-4 gap-2 flex items-center">
                        <a href="" class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                            More
                        </a>
                        <form action="" method="POST">
                            @csrf
                            <button class="px-3 py-1.5 hover:bg-red-800 bg-red-700 rounded text-white">
                                Cancel
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $burialRequestedSchedules->links() }}
    </div>


</x-app-layout>