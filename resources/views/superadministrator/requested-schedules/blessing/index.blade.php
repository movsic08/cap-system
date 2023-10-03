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
                @foreach ($blessingRequestedSchedules as $blessingRequestedSchedule)
                <tr class="bg-green-600 rounded text-white">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $blessingRequestedSchedule->blessing_for }}
                    </th>

                    <td class="px-6 py-4">
                        {{ $blessingRequestedSchedule->email }}
                    </td>
                    <td class="px-6 py-4 gap-2 flex items-center">
                        <a href="{{ route('requested-blessing.show', $blessingRequestedSchedule->id) }}"
                            class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                            More
                        </a>
                        @if ($blessingRequestedSchedule->cancel === 1)
                        <button class="px-3 py-1.5 hover:bg-red-800 cursor-not-allowed bg-red-700 rounded text-white">
                            Cancelled
                        </button>
                        @else
                        <form action="{{ route('approve-appointment-blessing') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $blessingRequestedSchedule->id }}">
                            <input class="hidden" type="checkbox" checked name="approve" disabled="disabled">
                            <input type="hidden" name="name" value="{{ $blessingRequestedSchedule->first_name }}">
                            <input type="hidden" name="email" value="{{ $blessingRequestedSchedule->email }}">
                            <button class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                                Approve
                            </button>
                        </form>
                        <form action="{{ route('reject-appointment-blessing') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $blessingRequestedSchedule->id }}">
                            <input class="hidden" type="checkbox" checked name="reject" disabled="disabled">
                            <input type="hidden" name="name" value="{{ $blessingRequestedSchedule->first_name }}">
                            <input type="hidden" name="email" value="{{ $blessingRequestedSchedule->email }}">
                            <button class="px-3 py-1.5 hover:bg-red-800 bg-red-700 rounded text-white">
                                Reject
                            </button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $blessingRequestedSchedules->links() }}
    </div>


</x-app-layout>