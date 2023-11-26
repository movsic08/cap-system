<x-app-layout>

    <div class="container mx-auto my-8">
        <h1 class="text-2xl font-bold mb-4">Appointments for {{ date('F', mktime(0, 0, 0, $month, 1)) }}</h1>

        @foreach(['baptismal', 'wedding', 'burial', 'blessing', 'confirmation'] as $appointmentType)
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-2">{{ ucfirst($appointmentType) }} Appointments</h2>
            @if(${$appointmentType.'Appointments'}->isEmpty())
            <p>No {{ $appointmentType }} appointments for this month.</p>
            @else
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">Date</th>
                        <th class="py-2 px-4 border-b">Other Details</th>
                        <!-- Add more table headers as needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach(${$appointmentType.'Appointments'} as $appointment)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ \Carbon\Carbon::parse($appointment->desired_date)->format('F
                            j, Y') }}</td>
                        {{-- <td class="py-2 px-4 border-b">{{ $appointment->other_field }}</td> --}}
                        <!-- Add more table cells as needed -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
        @endforeach
    </div>
</x-app-layout>
