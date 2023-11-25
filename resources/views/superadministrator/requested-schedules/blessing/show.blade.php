<x-app-layout>
    <div class="flex items-center justify-center">
        @if ($blessingRequestedScheduleInformation->approve === 1)
        <a class="bg-indigo-600 px-6 rounded py-1 absolute top-[6rem] right-10 text-white"
            href="{{ route('export-blessing-schedule', $blessingRequestedScheduleInformation) }}">
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
                Blessing
            </h3>
            <div class="mt-6">
                <div class="flex items-center mt-4 ">
                    <p>Name</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">{{
                        $blessingRequestedScheduleInformation->first_name }}</span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Email</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">{{
                        $blessingRequestedScheduleInformation->email }}</span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Blessing for</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">{{
                        $blessingRequestedScheduleInformation->blessing_for }}</span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Blessing on</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{
                        \Carbon\Carbon::parse($blessingRequestedScheduleInformation->desired_date)->isoFormat('MMM
                        D
                        YYYY')
                        }}
                    </span>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>