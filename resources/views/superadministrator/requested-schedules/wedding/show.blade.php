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
                <div class="flex items-center mt-4 ">
                    <p>Banns 1</p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $weddingRequestedScheduleInformation->banns1 }}
                    </span>
                    <p class="ml-4">
                        Banns 2
                    </p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $weddingRequestedScheduleInformation->banns2 }}
                    </span>

                </div>
                <div class="flex items-center mt-4">
                    <p class="ml-4">
                        Banns 3
                    </p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $weddingRequestedScheduleInformation->banns3 }}
                    </span>
                    <p class="ml-4">
                        Dispense
                    </p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $weddingRequestedScheduleInformation->dispense }}
                    </span>
                </div>
                <div class="flex items-center mt-4">
                    <p class="ml-4">
                        Date of Interrogation
                    </p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{\Carbon\Carbon::parse($weddingRequestedScheduleInformation->date_of_interrogation)->isoFormat('MMM
                        D YYYY')
                        }}
                    </span>
                </div>
                <div class="flex items-center mt-4">
                    <p class="ml-4">
                        Interrogation by
                    </p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $weddingRequestedScheduleInformation->interrogation_by }}
                    </span>
                </div>
                <div class="flex items-center mt-4">
                    <p class="ml-4">
                        Pre-Nuptial Counseling
                    </p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $weddingRequestedScheduleInformation->pre_nuptial_counseling }}
                    </span>
                    <p class="ml-4">
                        at
                    </p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $weddingRequestedScheduleInformation->nuptial_counseling_at }}
                    </span>
                </div>
                <div class="flex items-center mt-4">
                    <p class="ml-4">
                        Pre-Nuptial Counseling by
                    </p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $weddingRequestedScheduleInformation->nuptial_counseling_by }}
                    </span>
                </div>
                <div class="flex items-center mt-4">
                    <p class="ml-4">
                        Confession on
                    </p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{\Carbon\Carbon::parse($weddingRequestedScheduleInformation->confession_on)->isoFormat('MMM
                        D YYYY')
                        }}
                    </span>
                    <p class="ml-4">
                        at
                    </p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $weddingRequestedScheduleInformation->confession_at }}
                    </span>
                </div>
                <div class="flex items-center mt-4">
                    <p class="ml-4">
                        Confession by
                    </p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $weddingRequestedScheduleInformation->confession_by }}
                    </span>
                </div>
                <div class="flex items-center mt-4">
                    <p class="ml-4">
                        Rite to be conducted in
                    </p>
                    <span class="ml-2  border-b-2 border-slate-600  inline-flex ">
                        {{ $weddingRequestedScheduleInformation->rite_to_be_conducted_in }}
                    </span>
                </div>

                <div>
                    <h2 class="mt-4 font-bold">Checklist:</h2>
                    <div class="flex items-center mt-4 ">
                        <input id="grooms_baptismal_certificate" name="grooms_baptismal_certificate" type="checkbox" {{
                            $weddingRequestedScheduleInformation->grooms_baptismal_certificate==true
                        ? 'checked' : '' }} readonly disabled="disabled"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 rounded">
                        <span class="ml-3">Groom's Baptismal Certificate</span>
                    </div>
                    <div class="flex items-center mt-4 ">
                        <input id="brides_baptismal_certificate" name="brides_baptismal_certificate" type="checkbox" {{
                            $weddingRequestedScheduleInformation->brides_baptismal_certificate==true
                        ? 'checked' : '' }} readonly disabled="disabled"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 rounded">
                        <span class="ml-3">Bride's Baptismal Certificate</span>
                    </div>
                    <div class="flex items-center mt-4 ">
                        <input id="grooms_confirmation_certificate" name="grooms_confirmation_certificate"
                            type="checkbox" {{
                            $weddingRequestedScheduleInformation->grooms_confirmation_certificate==true
                        ? 'checked' : '' }} readonly disabled="disabled"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 rounded">
                        <span class="ml-3">Groom's Confirmation Certifiate</span>
                    </div>
                    <div class="flex items-center mt-4 ">
                        <input id="brides_confirmation_certificate" name="brides_confirmation_certificate"
                            type="checkbox" {{
                            $weddingRequestedScheduleInformation->brides_confirmation_certificate==true
                        ? 'checked' : '' }} readonly disabled="disabled"
                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-700 rounded">
                        <span class="ml-3">Bride's Confirmation Certificate</span>
                    </div>
                </div>

                <div>
                    <h2 class="mt-4 font-bold">Offering:</h2>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Marriage Fee</p>
                        <p class="underline">₱ {{ $weddingRequestedScheduleInformation->offering_mariage_fee }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Sponsors Fee</p>
                        <p class="underline">₱ {{ $weddingRequestedScheduleInformation->offering_sponsors_fee }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Banns</p>
                        <p class="underline">₱ {{ $weddingRequestedScheduleInformation->offering_banns }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Dispensation</p>
                        <p class="underline">₱ {{ $weddingRequestedScheduleInformation->offering_dispensation }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Baptism</p>
                        <p class="underline">₱ {{ $weddingRequestedScheduleInformation->offering_baptism }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Confirmation</p>
                        <p class="underline">₱ {{ $weddingRequestedScheduleInformation->offering_confirmation }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Choir</p>
                        <p class="underline">₱ {{ $weddingRequestedScheduleInformation->offering_choir }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Lights</p>
                        <p class="underline">₱ {{ $weddingRequestedScheduleInformation->offering_lights }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Video Coverage</p>
                        <p class="underline">₱ {{ $weddingRequestedScheduleInformation->offering_video_coverage }}</p>
                    </div>
                    <div class="flex w-[80%] mx-auto items-center justify-between mt-4 ">
                        <p>Etc.</p>
                        <p class="underline">₱ {{ $weddingRequestedScheduleInformation->offering_etc }}</p>
                    </div>
                    @php
                    $total = $weddingRequestedScheduleInformation->offering_mariage_fee +
                    $weddingRequestedScheduleInformation->offering_sponsors_fee +
                    $weddingRequestedScheduleInformation->offering_banns +
                    $weddingRequestedScheduleInformation->offering_dispensation +
                    $weddingRequestedScheduleInformation->offering_baptism +
                    $weddingRequestedScheduleInformation->offering_confirmation +
                    $weddingRequestedScheduleInformation->offering_choir +
                    $weddingRequestedScheduleInformation->offering_lights +
                    $weddingRequestedScheduleInformation->offering_video_coverage +
                    $weddingRequestedScheduleInformation->offering_etc
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