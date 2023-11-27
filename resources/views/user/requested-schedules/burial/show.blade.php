<x-app-layout>
    <div class="flex items-center justify-center">
        <div class="bg-white rounded shadow-md p-10">
            <header class="text-center">
                <p class="text-xl font-medium">Diocese of Alaminos</p>
                <h2 class="text-3xl font-bold ">Saint Joseph Cathedral Parish</h2>
                <p class="font-medium">Alaminos City, Pangasinan</p>
            </header>
            <h3 class="text-center font-semibold text-2xl  mt-4">
                Funeral Appointment
            </h3>
            <div class="mt-6">
                <div class="flex items-center mt-4 ">
                    <p>Name</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $burialRequestedScheduleInformation->deceased_name }}
                    </span>
                    <p class="ml-4">Age</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $burialRequestedScheduleInformation->deceased_age }}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Status</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $burialRequestedScheduleInformation->deceased_status }}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Parents/Husband/Wife</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $burialRequestedScheduleInformation->family_name }}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Residence</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $burialRequestedScheduleInformation->address }}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Cause of Death</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $burialRequestedScheduleInformation->cause_of_death }}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Date of Death</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ \Carbon\Carbon::parse($burialRequestedScheduleInformation->date_of_death)->isoFormat('MMM D
                        YYYY')}}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Date of Funeral</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{
                        \Carbon\Carbon::parse($burialRequestedScheduleInformation->desired_date)->isoFormat('MMM
                        D
                        YYYY')}}
                    </span>
                    <p class="ml-2">Time</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $burialRequestedScheduleInformation->desired_time }}
                        {{-- {{
                        \Carbon\Carbon::parse($burialRequestedScheduleInformation->desired_start_date_time)->format('H:i')
                        }} --}}
                    </span>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>