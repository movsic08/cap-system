<x-app-layout>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Monthly Appointments</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
            @foreach($monthlyAppointments as $month => $appointmentTypes)
            <div class="bg-white rounded-lg shadow-md p-4">
                <h2 class="text-xl font-semibold mb-2">{{ date('F', mktime(0, 0, 0, $month, 1)) }}</h2>

                @foreach($appointmentTypes as $appointmentType => $appointments)
                @if(count($appointments) > 0)
                <p class="text-sm text-gray-500 mt-2">{{ count($appointments) }} {{ ucfirst($appointmentType) }}
                    Appointments</p>
                @endif
                @endforeach

                <a href="{{ route('schedule.showByMonth', ['month' => $month]) }}" class="text-blue-500">View details
                    for {{
                    date('F', mktime(0, 0, 0, $month, 1)) }}</a>
            </div>
            @endforeach
        </div>
    </div>

</x-app-layout>