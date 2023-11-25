<x-app-layout>
    <div class="flex items-center justify-center">
        @if ($confirmationRequestedScheduleInformation->approve === 1)
        <a class="bg-indigo-600 px-6 rounded py-1 absolute top-[6rem] right-10 text-white"
            href="{{ route('export-confirmation-schedule', $confirmationRequestedScheduleInformation) }}">
            Print
        </a>
        @endif
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
                <div class="flex items-center mt-4 ">
                    <p>Place of Baptism</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">{{
                        $confirmationRequestedScheduleInformation->place_of_baptism }}</span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Birthplace</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">{{
                        $confirmationRequestedScheduleInformation->birthplace }}</span>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>