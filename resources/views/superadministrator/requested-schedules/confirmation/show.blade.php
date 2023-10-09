<x-app-layout>
    <div class="flex items-center justify-center">
        <div class="bg-white rounded shadow-md p-10">
            <header class="text-center">
                <p class="text-xl font-medium">Diocese of Alaminos</p>
                <h2 class="text-3xl font-bold ">Saint Joseph Cathedral Parish</h2>
                <p class="font-medium">Alaminos City, Pangasinan</p>
            </header>
            <h3 class="text-center font-semibold text-2xl  mt-4">
                Confirmation Slip
            </h3>
            <div class="mt-6">
                <div class="flex items-center mt-4 ">
                    <p>Name</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">{{
                        $confirmationRequestedScheduleInformation->confirmation_name }}</span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Date of Baptism</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{
                        \Carbon\Carbon::parse($confirmationRequestedScheduleInformation->date_of_baptism)->isoFormat('MMM
                        D
                        YYYY')
                        }}

                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Name of Father</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">{{
                        $confirmationRequestedScheduleInformation->father_name }}</span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Name of Mother</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">{{
                        $confirmationRequestedScheduleInformation->mother_name }}</span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Residence of Parents</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">{{
                        $confirmationRequestedScheduleInformation->residence_of_parents }}</span>
                </div>
                <div class="mt-6">
                    @php
                    $sponsors = explode(',', $confirmationRequestedScheduleInformation->sponsors);
                    @endphp
                    <p class="font-bold">Sponsors</p>
                    <ul>
                        @foreach ($sponsors as $sponsor)
                        <li class="border-b mt-4 border-black">{{ $sponsor }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>