<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">Blessing</h2>
    </header>

    <div class="relative overflow-x-auto rounded">
        <table class="w-full text-sm text-left text-slate-400">
            <thead class="text-xs  uppercase bg-green-700 text-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Blessing For
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
                @foreach ($blessingRejectedSchedules as $blessingRejectedSchedule)
                <tr class="bg-green-600 rounded text-white">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $blessingRejectedSchedule->blessing_for }}
                    </th>

                    <td class="px-6 py-4">
                        {{ $blessingRejectedSchedule->email }}
                    </td>
                    <td class="px-6 py-4 gap-2 flex items-center">
                        <a href="" class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                            More
                        </a>
                        <form action="{{ route('restore-appointment-blessing', $blessingRejectedSchedule->id) }}"
                            method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $blessingRejectedSchedule->id }}">
                            <input class="hidden" type="checkbox" name="reject" disabled="disabled">
                            <input class="hidden" type="checkbox" name="approve" disabled="disabled">
                            <button class="px-3 py-1.5 hover:bg-red-800 bg-red-700 rounded text-white">
                                Restore
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $blessingRejectedSchedules->links() }}
    </div>


</x-app-layout>