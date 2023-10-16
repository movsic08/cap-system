<x-app-layout>
    <div class="flex items-center justify-center">
        <div class="bg-white rounded shadow-md p-10">
            <header class="text-center">
                <p class="text-xl font-medium">Diocese of Alaminos</p>
                <h2 class="text-3xl font-bold ">Saint Joseph Cathedral Parish</h2>
                <p class="font-medium">Alaminos City, Pangasinan</p>
            </header>
            <h3 class="text-center font-semibold text-2xl  mt-4">
                Funeral Appointment & Checklist
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
                        \Carbon\Carbon::parse($burialRequestedScheduleInformation->desired_start_date_time)->isoFormat('MMM
                        D
                        YYYY')}}
                    </span>
                    <p class="ml-2">Time</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{
                        \Carbon\Carbon::parse($burialRequestedScheduleInformation->desired_start_date_time)->format('H:i')
                        }}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Cemetery</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $burialRequestedScheduleInformation->cemetery }}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Minister</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $burialRequestedScheduleInformation->minister }}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>NON/UT</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $burialRequestedScheduleInformation->non_ut }}
                    </span>
                </div>

                <div>
                    <h2 class="mt-4 font-bold">Checklist:</h2>
                    <div class="flex items-center mt-4 ">
                        <input id="certificate_of_death" name="certificate_of_death" type="checkbox" {{
                            $burialRequestedScheduleInformation->certificate_of_death==true
                        ? 'checked' : '' }} readonly disabled="disabled"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 rounded">
                        <span class="ml-3">Certificate of Death</span>
                    </div>
                    <div class="flex items-center mt-4 ">
                        <input id="burial_permit" name="burial_permit" type="checkbox" {{
                            $burialRequestedScheduleInformation->burial_permit==true
                        ? 'checked' : '' }} readonly disabled="disabled"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 rounded">
                        <span class="ml-3">Burial Permit</span>
                    </div>
                    <div class="flex items-center mt-4 ">
                        <input id="cemetery_lease_contract" name="cemetery_lease_contract" type="checkbox" {{
                            $burialRequestedScheduleInformation->cemetery_lease_contract==true
                        ? 'checked' : '' }} readonly disabled="disabled"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 rounded">
                        <span class="ml-3">Cemetery Lease Contract</span>
                    </div>
                </div>

                <div>
                    <h2 class="mt-4 font-bold">Offering:</h2>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Ordinary</p>
                        <p class="underline">₱ {{ $burialRequestedScheduleInformation->offering_ordinary }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>With Mass</p>
                        <p class="underline">₱ {{ $burialRequestedScheduleInformation->offering_with_mass }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Candles</p>
                        <p class="underline">₱ {{ $burialRequestedScheduleInformation->offering_candles }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Lights</p>
                        <p class="underline">₱ {{ $burialRequestedScheduleInformation->offering_lights }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Video Coverage</p>
                        <p class="underline">₱ {{ $burialRequestedScheduleInformation->offering_video_coverage }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Choir</p>
                        <p class="underline">₱ {{ $burialRequestedScheduleInformation->offering_choir }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Cemetery Lot</p>
                        <p class="underline">₱ {{ $burialRequestedScheduleInformation->offering_cemetery_lot }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Etc.</p>
                        <p class="underline">₱ {{ $burialRequestedScheduleInformation->offering_etc }}</p>
                    </div>
                    @php
                    $total = $burialRequestedScheduleInformation->offering_ordinary +
                    $burialRequestedScheduleInformation->offering_with_mass +
                    $burialRequestedScheduleInformation->offering_candles +
                    $burialRequestedScheduleInformation->offering_lights +
                    $burialRequestedScheduleInformation->offering_video_coverage +
                    $burialRequestedScheduleInformation->offering_choir +
                    $burialRequestedScheduleInformation->offering_cemetery_lot +
                    $burialRequestedScheduleInformation->offering_etc
                    @endphp
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p class="font-bold">Total</p>
                        <p class="font-bold underline">₱ {{ $total }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>