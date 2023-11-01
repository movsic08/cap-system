<x-app-layout>
    <div class="flex items-center justify-center">
        <div class="bg-white rounded shadow-md p-10">
            <header class="text-center">
                <p class="text-xl font-medium">Diocese of Alaminos</p>
                <h2 class="text-3xl font-bold ">Saint Joseph Cathedral Parish</h2>
                <p class="font-medium">Alaminos City, Pangasinan</p>
            </header>
            <h3 class="text-center font-semibold text-2xl  mt-4">
                Marriage Appointment & Checklist
            </h3>
            <div class="mt-6">
                <div class="flex items-center mt-4 ">
                    <p>Groom</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $weddingRequestedScheduleInformation->grooms_name }}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Bride</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $weddingRequestedScheduleInformation->brides_name }}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Date of Marriage</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{\Carbon\Carbon::parse($weddingRequestedScheduleInformation->desired_start_date_time)->isoFormat('MMM
                        D YYYY')
                        }}
                    </span>
                    <p class="ml-4">
                        Time
                    </p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{
                        \Carbon\Carbon::parse($weddingRequestedScheduleInformation->desired_start_date_time)->format('H:i')
                        }}
                    </span>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>