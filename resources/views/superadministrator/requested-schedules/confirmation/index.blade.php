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
                        Desired Date
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Desired Time
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($confirmationRequestedSchedules as $confirmationRequestedSchedule)
                <tr class="bg-green-600 rounded text-white">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $confirmationRequestedSchedule->confirmation_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{\Carbon\Carbon::parse($confirmationRequestedSchedule->confirmation_date)->isoFormat('MMM
                        D YYYY')
                        }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $confirmationRequestedSchedule->email }}
                    </td>
                    
                    <td class="px-6 py-4">
                        {{\Carbon\Carbon::parse($confirmationRequestedSchedule->desired_date)->isoFormat('MMM
                        D YYYY')
                        }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $confirmationRequestedSchedule->desired_time }}
                    </td>
                    <td class="px-6 py-4 gap-2 flex items-center">
                        <a href="{{ route('requested-confirmation.show', $confirmationRequestedSchedule->id) }}"
                            class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                            More
                        </a>
                        @if ($confirmationRequestedSchedule->cancel === 1)
                        <button class="px-3 py-1.5 hover:bg-red-800 cursor-not-allowed bg-red-700 rounded text-white">
                            Cancelled
                        </button>
                        @else
                        <form action="{{ route('approve-appointment-confirmation') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $confirmationRequestedSchedule->id }}">
                            <input class="hidden" type="checkbox" checked name="approve" disabled="disabled">
                            <input type="hidden" name="name" value="{{ $confirmationRequestedSchedule->first_name }}">
                            <input type="hidden" name="email" value="{{ $confirmationRequestedSchedule->email }}">
                            <button   onclick="return confirm('Are you sure?')" class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                                Approve
                            </button>
                        </form>
                        <form action="{{ route('reject-appointment-confirmation') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $confirmationRequestedSchedule->id }}">
                            <input class="hidden" type="checkbox" checked name="reject" disabled="disabled">
                            <input type="hidden" name="name" value="{{ $confirmationRequestedSchedule->first_name }}">
                            <input type="hidden" name="email" value="{{ $confirmationRequestedSchedule->email }}">
                            <button   onclick="return confirm('Are you sure?')" class="px-3 py-1.5 hover:bg-red-800 bg-red-700 rounded text-white">
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
        {{ $confirmationRequestedSchedules->links() }}
    </div>


</x-app-layout>