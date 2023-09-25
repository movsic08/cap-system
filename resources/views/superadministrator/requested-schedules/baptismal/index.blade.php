<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">Baptismal</h2>
    </header>

    <div class="relative overflow-x-auto rounded">
        <table class="w-full text-sm text-left text-slate-400">
            <thead class="text-xs  uppercase bg-green-700 text-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Child's Name
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Mother's Name
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
                @foreach ($baptismalRequestedSchedules as $baptismalRequestedSchedule)
                <tr class="bg-green-600 rounded text-white">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $baptismalRequestedSchedule->childs_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $baptismalRequestedSchedule->mothers_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $baptismalRequestedSchedule->email }}
                    </td>
                    <td class="px-6 py-4 gap-2 flex items-center">
                        <a href="{{ route('requested-baptism.show', $baptismalRequestedSchedule->id) }}"
                            class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                            More
                        </a>
                        <form action="{{ route('approve-appointment-baptism') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $baptismalRequestedSchedule->id }}">
                            <input class="hidden" type="checkbox" checked name="approve" disabled="disabled">
                            <button class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                                Approve
                            </button>
                        </form>
                        <form action="{{ route('reject-appointment-baptism') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $baptismalRequestedSchedule->id }}">
                            <input class="hidden" type="checkbox" checked name="reject" disabled="disabled">
                            <button class="px-3 py-1.5 hover:bg-red-800 bg-red-700 rounded text-white">
                                Reject
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            {{-- <tfoot>
                <tr class="font-semibold text-gray-900 dark:text-white bg-green-500">
                    <th scope="row" class="px-6 py-3 text-base">Total</th>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3">₱{{ $donation_total }}</td>
                </tr>
            </tfoot> --}}
        </table>
    </div>

    <div class="mt-4">
        {{ $baptismalRequestedSchedules->links() }}
    </div>


</x-app-layout>