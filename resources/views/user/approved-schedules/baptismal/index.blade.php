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
                @foreach ($baptismalApprovedSchedules as $baptismalApproveSchedule)
                <tr class="bg-green-600 rounded text-white">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $baptismalApproveSchedule->childs_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $baptismalApproveSchedule->mothers_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $baptismalApproveSchedule->email }}
                    </td>
                    <td class="px-6 py-4 gap-2 flex items-center">
                        <a href="{{ route('user-requested-baptism.show', $baptismalApproveSchedule->id) }}"
                            class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                            More
                        </a>
                        <form action="{{ route('cancel-appointment-baptism') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $baptismalApproveSchedule->id }}">
                            <input class="hidden" type="checkbox" checked name="cancel" disabled="disabled">
                            <button onclick="return confirm('Are you sure?')"
                                class="px-3 py-1.5 hover:bg-red-800 bg-red-700 rounded text-white">
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
        {{ $baptismalApprovedSchedules->links() }}
    </div>


</x-app-layout>