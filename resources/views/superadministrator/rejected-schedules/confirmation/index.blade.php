<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">Confirmation</h2>
    </header>

    <div class="relative overflow-x-auto rounded">
        <table class="w-full text-sm text-left text-slate-400">
            <thead class="text-xs  uppercase bg-green-700 text-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Confirmation Name
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Confirmation Date
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
                @foreach ($confirmationRejectedSchedules as $confirmationRejectedSchedule)
                <tr class="bg-green-600 rounded text-white">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $confirmationRejectedSchedule->confirmation_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{\Carbon\Carbon::parse($confirmationRejectedSchedule->confirmation_date)->isoFormat('MMM
                        D YYYY')
                        }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $confirmationRejectedSchedule->email }}
                    </td>
                    <td class="px-6 py-4 gap-2 flex items-center">
                        <a href="{{ route('requested-confirmation.show', $confirmationRejectedSchedule->id) }}"
                            class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                            More
                        </a>
                        <form
                            action="{{ route('restore-appointment-confirmation', $confirmationRejectedSchedule->id) }}"
                            method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $confirmationRejectedSchedule->id }}">
                            <input class="hidden" type="checkbox" name="reject" disabled="disabled">
                            <input class="hidden" type="checkbox" name="approve" disabled="disabled">
                            <input type="hidden" name="name" value="{{ $confirmationRejectedSchedule->first_name }}">
                            <input type="hidden" name="email" value="{{ $confirmationRejectedSchedule->email }}">
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
        {{ $confirmationRejectedSchedules->links() }}
    </div>


</x-app-layout>