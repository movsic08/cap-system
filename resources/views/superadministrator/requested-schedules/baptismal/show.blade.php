<x-app-layout>
    <div class="flex items-center justify-center">
        @if ($baptismalRequestedScheduleInformation->approve === 1)
        <a class="bg-indigo-600 px-6 rounded py-1 absolute top-[6rem] right-10 text-white"
            href="{{ route('export-baptismal-schedule', $baptismalRequestedScheduleInformation) }}">
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
                Baptismal Remembrance
            </h3>
            <div class="mt-6">
                <div class="flex items-center ">
                    <p>Name</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">{{
                        $baptismalRequestedScheduleInformation->childs_name }}</span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Child of</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">{{
                        $baptismalRequestedScheduleInformation->mothers_name }}</span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>and</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">{{
                        $baptismalRequestedScheduleInformation->fathers_name }}</span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Born in</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">{{
                        $baptismalRequestedScheduleInformation->childs_birthplace }}</span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>On the</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ \Carbon\Carbon::parse($baptismalRequestedScheduleInformation->childs_birthdate)->format('jS')
                        }}
                    </span>
                    <span class="ml-2">

                    </span>
                    <p>day of</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ \Carbon\Carbon::parse($baptismalRequestedScheduleInformation->childs_birthdate)->format('F')
                        }}, {{
                        \Carbon\Carbon::parse($baptismalRequestedScheduleInformation->childs_birthdate)->isoFormat('
                        YYYY')}}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Was baptized on the</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">

                    </span>
                    <p>day of</p> ,
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{\Carbon\Carbon::parse($baptismalRequestedScheduleInformation->desired_date)->isoFormat('MMM
                        D YYYY')
                        }}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>By Rev</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $baptismalRequestedScheduleInformation->parish_priest }}
                    </span>
                </div>
                <div class="flex items-center mt-4 ">
                    <p>Legitimacy (Catholic, Protestant, Aglipayan, Natural)</p>
                </div>

                <div class="flex items-center justify-between mt-6">
                    @php
                    $godfathers = explode(',', $baptismalRequestedScheduleInformation->godfather);
                    $godmothers = explode(',', $baptismalRequestedScheduleInformation->godmother);
                    @endphp
                    <div>
                        <p class="text-center font-bold">Godfather</p>
                        <ul>
                            @foreach ($godfathers as $godfather)
                            <li class="border-b mt-4 border-black">{{ $godfather }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <p class="text-center font-bold">Godmother</p>
                        <ul>
                            @foreach ($godmothers as $godmother)
                            <li class="border-b mt-4 border-black">{{ $godmother }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="mt-6">
                    @php
                    $sponsors = explode(',', $baptismalRequestedScheduleInformation->sponsors);
                    @endphp
                    <p class="font-bold">Sponsors</p>
                    <ul>
                        @foreach ($sponsors as $sponsor)
                        <li class="border-b mt-4 border-black">{{ $sponsor }}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="flex items-center mt-4 ">
                    <p>Parish Priest</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $baptismalRequestedScheduleInformation->parish_priest }}
                    </span>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>