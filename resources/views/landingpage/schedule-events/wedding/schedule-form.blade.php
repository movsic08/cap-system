<x-landing-page-layout>
    <form action="{{ route('wedding-schedule-form.store') }}" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b bg-green-700 p-6 rounded-lg border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-white">Wedding Schedule Form</h2>
                <p class="mb-1 text-sm leading-6 text-gray-50">Use a permanent address where you can receive mail.</p>
                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="first_name" class="block text-sm font-medium leading-6 text-gray-200">
                            First Name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="first_name" id="first_name"
                                value="{{ old('first_name', Auth::user()->name) }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-200">
                            Email Address
                        </label>
                        <div class="mt-2">
                            <input type="text" name="email" id="email" value="{{ old('email', Auth::user()->email) }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="brides_name" class="block text-sm font-medium leading-6 text-gray-200">
                            Bride's Name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="brides_name" id="brides_name" value="{{ old('brides_name') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('brides_name')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="grooms_name" class="block text-sm font-medium leading-6 text-gray-200">
                            Groom's Name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="grooms_name" id="grooms_name" value="{{ old('grooms_name') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('grooms_name')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="desired_start_date_time" class="block text-sm font-medium leading-6 text-gray-200">
                            Desired Start Date & Time
                        </label>
                        <div class="mt-2">
                            <input type="datetime-local" name="desired_start_date_time" id="desired_start_date_time"
                                value="{{ old('desired_start_date_time') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('desired_start_date_time')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="desired_end_date_time" class="block text-sm font-medium leading-6 text-gray-200">
                            Desired End Date & Time
                        </label>
                        <div class="mt-2">
                            <input type="datetime-local" name="desired_end_date_time" id="desired_end_date_time"
                                value="{{ old('desired_end_date_time') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('desired_end_date_time')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="address" class="block text-sm font-medium leading-6 text-gray-200">
                            Address
                        </label>
                        <div class="mt-2">
                            <input type="text" name="address" id="address" value="{{ old('address') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('address')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="contact_number" class="block text-sm font-medium leading-6 text-gray-200">
                            Contact Number
                        </label>
                        <div class="mt-2">
                            <input type="number" name="contact_number" id="contact_number"
                                value="{{ old('contact_number') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('contact_number')" />
                        </div>
                    </div>

                    <div class="sm:col-span-6">
                        <h2>Banns:</h2>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="banns1" class="block text-sm font-medium leading-6 text-gray-200">
                            Banns 1
                        </label>
                        <div class="mt-2">
                            <input type="text" name="banns1" id="banns1" value="{{ old('banns1') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('banns1')" />
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="banns2" class="block text-sm font-medium leading-6 text-gray-200">
                            Banns 2
                        </label>
                        <div class="mt-2">
                            <input type="text" name="banns2" id="banns2" value="{{ old('banns2') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('banns2')" />
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="banns3" class="block text-sm font-medium leading-6 text-gray-200">
                            Banns 3
                        </label>
                        <div class="mt-2">
                            <input type="text" name="banns3" id="banns3" value="{{ old('banns3') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('banns3')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="dispense" class="block text-sm font-medium leading-6 text-gray-200">
                            Dispense
                        </label>
                        <div class="mt-2">
                            <input type="text" name="dispense" id="dispense" value="{{ old('dispense') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('dispense')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="date_of_interrogation" class="block text-sm font-medium leading-6 text-gray-200">
                            Date of Interrogation
                        </label>
                        <div class="mt-2">
                            <input type="date" name="date_of_interrogation" id="date_of_interrogation"
                                value="{{ old('date_of_interrogation') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('date_of_interrogation')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="interrogation_by" class="block text-sm font-medium leading-6 text-gray-200">
                            Interrogation By
                        </label>
                        <div class="mt-2">
                            <input type="text" name="interrogation_by" id="interrogation_by"
                                value="{{ old('interrogation_by') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('interrogation_by')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="pre_nuptial_counseling" class="block text-sm font-medium leading-6 text-gray-200">
                            Pre-Nuptial Counseling
                        </label>
                        <div class="mt-2">
                            <input type="text" name="pre_nuptial_counseling" id="pre_nuptial_counseling"
                                value="{{ old('pre_nuptial_counseling') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('pre_nuptial_counseling')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="nuptial_counseling_at" class="block text-sm font-medium leading-6 text-gray-200">
                            Pre-Nuptial Counseling At
                        </label>
                        <div class="mt-2">
                            <input type="text" name="nuptial_counseling_at" id="nuptial_counseling_at"
                                value="{{ old('nuptial_counseling_at') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('nuptial_counseling_at')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="nuptial_counseling_by" class="block text-sm font-medium leading-6 text-gray-200">
                            Pre-Nuptial Counseling By
                        </label>
                        <div class="mt-2">
                            <input type="text" name="nuptial_counseling_by" id="nuptial_counseling_by"
                                value="{{ old('nuptial_counseling_by') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('nuptial_counseling_by')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="confession_on" class="block text-sm font-medium leading-6 text-gray-200">
                            Confession On
                        </label>
                        <div class="mt-2">
                            <input type="date" name="confession_on" id="confession_on"
                                value="{{ old('confession_on') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('confession_on')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="confession_at" class="block text-sm font-medium leading-6 text-gray-200">
                            Confession At
                        </label>
                        <div class="mt-2">
                            <input type="text" name="confession_at" id="confession_at"
                                value="{{ old('confession_at') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('confession_at')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="confession_by" class="block text-sm font-medium leading-6 text-gray-200">
                            Confession By
                        </label>
                        <div class="mt-2">
                            <input type="text" name="confession_by" id="confession_by"
                                value="{{ old('confession_by') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('confession_by')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="rite_to_be_conducted_in" class="block text-sm font-medium leading-6 text-gray-200">
                            Rite to be conducted in
                        </label>
                        <div class="mt-2">
                            <input type="text" name="rite_to_be_conducted_in" id="rite_to_be_conducted_in"
                                value="{{ old('rite_to_be_conducted_in') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('rite_to_be_conducted_in')" />
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-6 mt-4">
                    <h2 class="font-bold">Checklist:</h2>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <div class="col-span-6 sm:col-span-2">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="grooms_baptismal_certificate" name="grooms_baptismal_certificate"
                                    type="checkbox"
                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="grooms_baptismal_certificate"
                                    class="block text-sm font-medium leading-6 text-gray-200">
                                    Groom's Baptismal Certificate
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="brides_baptismal_certificate" name="brides_baptismal_certificate"
                                    type="checkbox"
                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="brides_baptismal_certificate"
                                    class="block text-sm font-medium leading-6 text-gray-200">
                                    Bride's Baptismal Certificate
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="grooms_confirmation_certificate" name="grooms_confirmation_certificate"
                                    type="checkbox"
                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="grooms_confirmation_certificate"
                                    class="block text-sm font-medium leading-6 text-gray-200">
                                    Groom's Confirmation Certificate
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="brides_confirmation_certificate" name="brides_confirmation_certificate"
                                    type="checkbox"
                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="brides_confirmation_certificate"
                                    class="block text-sm font-medium leading-6 text-gray-200">
                                    Bride's Confirmation Certificate
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-6 mt-4">
                    <h2 class="font-bold">Offering:</h2>
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="offering_mariage_fee" class="block text-sm font-medium leading-6 text-gray-200">
                            Marriage fee
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm py-0.5 ring-1 ring-inset bg-white ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">₱</span>
                                <input type="number" name="offering_mariage_fee" id="offering_mariage_fee"
                                    value="{{ old('offering_mariage_fee') }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('offering_mariage_fee')" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="offering_sponsors_fee" class="block text-sm font-medium leading-6 text-gray-200">
                            Sponsors fee
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm py-0.5 ring-1 ring-inset bg-white ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">₱</span>
                                <input type="number" name="offering_sponsors_fee" id="offering_sponsors_fee"
                                    value="{{ old('offering_sponsors_fee') }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('offering_sponsors_fee')" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="offering_banns" class="block text-sm font-medium leading-6 text-gray-200">
                            Sponsors fee
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm py-0.5 ring-1 ring-inset bg-white ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">₱</span>
                                <input type="number" name="offering_banns" id="offering_banns"
                                    value="{{ old('offering_banns') }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('offering_banns')" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="offering_dispensation" class="block text-sm font-medium leading-6 text-gray-200">
                            Dispensation
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm py-0.5 ring-1 ring-inset bg-white ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">₱</span>
                                <input type="number" name="offering_dispensation" id="offering_dispensation"
                                    value="{{ old('offering_dispensation') }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('offering_dispensation')" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="offering_baptism" class="block text-sm font-medium leading-6 text-gray-200">
                            Baptism
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm py-0.5 ring-1 ring-inset bg-white ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">₱</span>
                                <input type="number" name="offering_baptism" id="offering_baptism"
                                    value="{{ old('offering_baptism') }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('offering_baptism')" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="offering_confirmation" class="block text-sm font-medium leading-6 text-gray-200">
                            Confirmation
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm py-0.5 ring-1 ring-inset bg-white ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">₱</span>
                                <input type="number" name="offering_confirmation" id="offering_confirmation"
                                    value="{{ old('offering_confirmation') }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('offering_confirmation')" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="offering_choir" class="block text-sm font-medium leading-6 text-gray-200">
                            Choir
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm py-0.5 ring-1 ring-inset bg-white ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">₱</span>
                                <input type="number" name="offering_choir" id="offering_choir"
                                    value="{{ old('offering_choir') }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('offering_choir')" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="offering_lights" class="block text-sm font-medium leading-6 text-gray-200">
                            Lights
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm py-0.5 ring-1 ring-inset bg-white ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">₱</span>
                                <input type="number" name="offering_lights" id="offering_lights"
                                    value="{{ old('offering_lights') }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('offering_lights')" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="offering_video_coverage" class="block text-sm font-medium leading-6 text-gray-200">
                            Video Coverage
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm py-0.5 ring-1 ring-inset bg-white ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">₱</span>
                                <input type="number" name="offering_video_coverage" id="offering_video_coverage"
                                    value="{{ old('offering_video_coverage') }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('offering_video_coverage')" />
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="offering_etc" class="block text-sm font-medium leading-6 text-gray-200">
                            Etc
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm py-0.5 ring-1 ring-inset bg-white ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">₱</span>
                                <input type="number" name="offering_etc" id="offering_etc"
                                    value="{{ old('offering_etc') }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('offering_etc')" />
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-6 mt-4">
                    <label for="message" class="block text-sm font-medium leading-6 text-gray-200">
                        Message <span class="text-xs">(optional)</span>
                    </label>
                    <textarea id="message" name="message" rows="3"
                        class="block mt-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('message') }}</textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('message')" />
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('schedule-event.index') }}"
                    class="text-base font-semibold leading-6 text-white">Cancel</a>
                {{-- <button type="submit"
                    class="rounded-md bg-indigo-600 px-6 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Submit
                </button> --}}
                <button type="button" x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-form')"
                    class="rounded-md bg-indigo-600 px-6 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Continue
                </button>
                @include('landingpage.schedule-events.wedding.finalize-wedding-form')
            </div>
        </div>
    </form>


    <div class="bg-green-700 mt-4 rounded p-4" id="calendar"></div>


    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                height: 720,
                initialView: 'timeGridWeek',
                slotMinTime: '8:00:00',
                slotMaxTime: '19:00:00',
                events: @json($events),
            });
            calendar.render();
        });


           // Get references to the input fields and display elements
           const inputs = [
            document.getElementById("first_name"),
            document.getElementById("email"),
            document.getElementById("brides_name"),
            document.getElementById("grooms_name"),
            document.getElementById("desired_start_date_time"),
            document.getElementById("desired_end_date_time"),
            document.getElementById("address"),
            document.getElementById("contact_number"),
            document.getElementById("banns1"),
            document.getElementById("banns2"),
            document.getElementById("banns3"),
            document.getElementById("dispense"),
            document.getElementById("date_of_interrogation"),
            document.getElementById("interrogation_by"),
            document.getElementById("pre_nuptial_counseling"),
            document.getElementById("nuptial_counseling_at"),
            document.getElementById("nuptial_counseling_by"),
            document.getElementById("confession_on"),
            document.getElementById("confession_at"),
            document.getElementById("confession_by"),
            document.getElementById("rite_to_be_conducted_in"),
            document.getElementById("grooms_baptismal_certificate"),
            document.getElementById("brides_baptismal_certificate"),
            document.getElementById("grooms_confirmation_certificate"),
            document.getElementById("brides_confirmation_certificate"),
            document.getElementById("offering_mariage_fee"),
            document.getElementById("offering_sponsors_fee"),
            document.getElementById("offering_banns"),
            document.getElementById("offering_dispensation"),
            document.getElementById("offering_baptism"),
            document.getElementById("offering_confirmation"),
            document.getElementById("offering_choir"),
            document.getElementById("offering_lights"),
            document.getElementById("offering_video_coverage"),
            document.getElementById("offering_etc"),
            document.getElementById("message"),
        ];
        const displays = [
            document.getElementById("display1"),
            document.getElementById("display2"),
            document.getElementById("display3"),
            document.getElementById("display4"),
            document.getElementById("display5"),
            document.getElementById("display6"),
            document.getElementById("display7"),
            document.getElementById("display8"),
            document.getElementById("display9"),
            document.getElementById("display10"),
            document.getElementById("display11"),
            document.getElementById("display12"),
            document.getElementById("display13"),
            document.getElementById("display14"),
            document.getElementById("display15"),
            document.getElementById("display16"),
            document.getElementById("display17"),
            document.getElementById("display18"),
            document.getElementById("display19"),
            document.getElementById("display20"),
            document.getElementById("display21"),
            document.getElementById("display22"),
            document.getElementById("display23"),
            document.getElementById("display24"),
            document.getElementById("display25"),
            document.getElementById("display26"),
            document.getElementById("display27"),
            document.getElementById("display28"),
            document.getElementById("display29"),
            document.getElementById("display30"),
            document.getElementById("display31"),
            document.getElementById("display32"),
            document.getElementById("display33"),
            document.getElementById("display34"),
            document.getElementById("display35"),
            document.getElementById("display36"),
        ];

        // Initialize the data model
        var array = [];
        for (let i = 0; i < inputs.length; i++) {
            let element = inputs[i].value;
            array.push(element);
        }

        let dataModel = array;

        // Function to update the UI with the current data model values
        function updateUI() {
            for (let i = 0; i < inputs.length; i++) {
                dataModel[i] === "" ? displays[i].textContent = "No Data Entered" : displays[i].textContent = dataModel[i];
                displays[21].textContent = ""
                inputs[21].checked === true ? displays[21].checked = true : displays[21].checked = false
                displays[22].textContent = ""
                inputs[22].checked === true ? displays[22].checked = true : displays[22].checked = false
                displays[23].textContent = ""
                inputs[23].checked === true ? displays[23].checked = true : displays[23].checked = false
                displays[24].textContent = ""
                inputs[24].checked === true ? displays[24].checked = true : displays[24].checked = false
            }
        }

        // Function to update the data model with the input values
        function updateDataModel(index) {
            dataModel[index] = inputs[index].value;
            updateUI();
        }

        // Add event listeners for input changes and initial UI update
        for (let i = 0; i < inputs.length; i++) {

            inputs[i].addEventListener("input", (event) => {
                updateDataModel(i);
            });
        }

        // Initialize the UI with the current data model values
        updateUI();
    </script>
    @endpush
</x-landing-page-layout>


<style>
    .fc-v-event {
        /* allowed to be top-level */
        display: block;
        border: 1px solid #3788d8;
        border: 1px solid var(--fc-event-border-color, #3788d8);
        background-color: #3788d8;
        background-color: var(--fc-event-bg-color, #3788d8)
    }

    .fc-v-event .fc-event-main {
        color: #fff;
        color: var(--fc-event-text-color, #fff);
    }

    .fc-v-event .fc-event-main-frame {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .fc-v-event .fc-event-time {
        flex-grow: 0;
        flex-shrink: 0;
        max-height: 100%;
        overflow: hidden;
    }

    .fc-v-event .fc-event-title-container {
        /* a container for the sticky cushion */
        flex-grow: 1;
        flex-shrink: 1;
        min-height: 0;
        /* important for allowing to shrink all the way */
    }

    .fc-v-event .fc-event-title {
        /* will have fc-sticky on it */
        top: 0;
        bottom: 0;
        max-height: 100%;
        /* clip overflow */
        overflow: hidden;
    }

    .fc-v-event:not(.fc-event-start) {
        border-top-width: 0;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .fc-v-event:not(.fc-event-end) {
        border-bottom-width: 0;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    .fc-v-event.fc-event-selected:before {
        /* expand hit area */
        left: -10px;
        right: -10px;
    }

    .fc-v-event {

        /* resizer (mouse AND touch) */

    }

    .fc-v-event .fc-event-resizer-start {
        cursor: n-resize;
    }

    .fc-v-event .fc-event-resizer-end {
        cursor: s-resize;
    }

    .fc-v-event {

        /* resizer for MOUSE */

    }

    .fc-v-event:not(.fc-event-selected) .fc-event-resizer {
        height: 8px;
        height: var(--fc-event-resizer-thickness, 8px);
        left: 0;
        right: 0;
    }

    .fc-v-event:not(.fc-event-selected) .fc-event-resizer-start {
        top: -4px;
        top: calc(var(--fc-event-resizer-thickness, 8px) / -2);
    }

    .fc-v-event:not(.fc-event-selected) .fc-event-resizer-end {
        bottom: -4px;
        bottom: calc(var(--fc-event-resizer-thickness, 8px) / -2);
    }

    .fc-v-event {

        /* resizer for TOUCH (when event is "selected") */

    }

    .fc-v-event.fc-event-selected .fc-event-resizer {
        left: 50%;
        margin-left: -4px;
        margin-left: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2);
    }

    .fc-v-event.fc-event-selected .fc-event-resizer-start {
        top: -4px;
        top: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2);
    }

    .fc-v-event.fc-event-selected .fc-event-resizer-end {
        bottom: -4px;
        bottom: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2);
    }

    .fc .fc-timegrid .fc-daygrid-body {
        /* the all-day daygrid within the timegrid view */
        z-index: 2;
        /* put above the timegrid-body so that more-popover is above everything. TODO: better solution */
    }

    .fc .fc-timegrid-divider {
        padding: 0 0 2px;
        /* browsers get confused when you set height. use padding instead */
    }

    .fc .fc-timegrid-body {
        position: relative;
        z-index: 1;
        /* scope the z-indexes of slots and cols */
        min-height: 100%;
        /* fill height always, even when slat table doesn't grow */
    }

    .fc .fc-timegrid-axis-chunk {
        /* for advanced ScrollGrid */
        position: relative
            /* offset parent for now-indicator-container */

    }

    .fc .fc-timegrid-axis-chunk>table {
        position: relative;
        z-index: 1;
        /* above the now-indicator-container */
    }

    .fc .fc-timegrid-slots {
        position: relative;
        z-index: 1;
    }

    .fc .fc-timegrid-slot {
        /* a <td> */
        height: 1.5em;
        border-bottom: 0
            /* each cell owns its top border */
    }

    .fc .fc-timegrid-slot:empty:before {
        content: '\00a0';
        /* make sure there's at least an empty space to create height for height syncing */
    }

    .fc .fc-timegrid-slot-minor {
        border-top-style: dotted;
    }

    .fc .fc-timegrid-slot-label-cushion {
        display: inline-block;
        white-space: nowrap;
    }

    .fc .fc-timegrid-slot-label {
        vertical-align: middle;
        /* vertical align the slots */
    }

    .fc {


        /* slots AND axis cells (top-left corner of view including the "all-day" text) */

    }

    .fc .fc-timegrid-axis-cushion,
    .fc .fc-timegrid-slot-label-cushion {
        padding: 0 4px;
    }

    .fc {


        /* axis cells (top-left corner of view including the "all-day" text) */
        /* vertical align is more complicated, uses flexbox */

    }

    .fc .fc-timegrid-axis-frame-liquid {
        height: 100%;
        /* will need liquid-hack in FF */
    }

    .fc .fc-timegrid-axis-frame {
        overflow: hidden;
        display: flex;
        align-items: center;
        /* vertical align */
        justify-content: flex-end;
        /* horizontal align. matches text-align below */
    }

    .fc .fc-timegrid-axis-cushion {
        max-width: 60px;
        /* limits the width of the "all-day" text */
        flex-shrink: 0;
        /* allows text to expand how it normally would, regardless of constrained width */
    }

    .fc-direction-ltr .fc-timegrid-slot-label-frame {
        text-align: right;
    }

    .fc-direction-rtl .fc-timegrid-slot-label-frame {
        text-align: left;
    }

    .fc-liquid-hack .fc-timegrid-axis-frame-liquid {
        height: auto;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .fc .fc-timegrid-col.fc-day-today {
        background-color: rgba(255, 220, 40, 0.15);
        background-color: var(--fc-today-bg-color, rgba(255, 220, 40, 0.15));
    }

    .fc .fc-timegrid-col-frame {
        min-height: 100%;
        /* liquid-hack is below */
        position: relative;
    }

    .fc-media-screen.fc-liquid-hack .fc-timegrid-col-frame {
        height: auto;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .fc-media-screen .fc-timegrid-cols {
        position: absolute;
        /* no z-index. children will decide and go above slots */
        top: 0;
        left: 0;
        right: 0;
        bottom: 0
    }

    .fc-media-screen .fc-timegrid-cols>table {
        height: 100%;
    }

    .fc-media-screen .fc-timegrid-col-bg,
    .fc-media-screen .fc-timegrid-col-events,
    .fc-media-screen .fc-timegrid-now-indicator-container {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }

    .fc {

        /* bg */

    }

    .fc .fc-timegrid-col-bg {
        z-index: 2;
        /* TODO: kill */
    }

    .fc .fc-timegrid-col-bg .fc-non-business {
        z-index: 1
    }

    .fc .fc-timegrid-col-bg .fc-bg-event {
        z-index: 2
    }

    .fc .fc-timegrid-col-bg .fc-highlight {
        z-index: 3
    }

    .fc .fc-timegrid-bg-harness {
        position: absolute;
        /* top/bottom will be set by JS */
        left: 0;
        right: 0;
    }

    .fc {

        /* fg events */
        /* (the mirror segs are put into a separate container with same classname, */
        /* and they must be after the normal seg container to appear at a higher z-index) */

    }

    .fc .fc-timegrid-col-events {
        z-index: 3;
        /* child event segs have z-indexes that are scoped within this div */
    }

    .fc {

        /* now indicator */

    }

    .fc .fc-timegrid-now-indicator-container {
        bottom: 0;
        overflow: hidden;
        /* don't let overflow of lines/arrows cause unnecessary scrolling */
        /* z-index is set on the individual elements */
    }

    .fc-direction-ltr .fc-timegrid-col-events {
        margin: 0 2.5% 0 2px;
    }

    .fc-direction-rtl .fc-timegrid-col-events {
        margin: 0 2px 0 2.5%;
    }

    .fc-timegrid-event-harness {
        position: absolute
            /* top/left/right/bottom will all be set by JS */
    }

    .fc-timegrid-col {
        position: relative;
    }

    .fc-timegrid-event-harness>.fc-timegrid-event {
        position: absolute;
        /* absolute WITHIN the harness */
        top: 0;
        /* for when not yet positioned */
        bottom: 0;
        /* " */
        left: 0;
        right: 0;
    }

    .fc-timegrid-event-harness-inset .fc-timegrid-event,
    .fc-timegrid-event.fc-event-mirror,
    .fc-timegrid-more-link {
        box-shadow: 0px 0px 0px 1px #fff;
        box-shadow: 0px 0px 0px 1px var(--fc-page-bg-color, #fff);
    }

    .fc-timegrid-event,
    .fc-timegrid-more-link {
        /* events need to be root */
        font-size: .85em;
        font-size: var(--fc-small-font-size, .85em);
        border-radius: 3px;
    }

    .fc-timegrid-event {
        /* events need to be root */
        margin-bottom: 1px
            /* give some space from bottom */
    }

    .fc-timegrid-event .fc-event-main {
        padding: 1px 1px 0;
    }

    .fc-timegrid-event .fc-event-time {
        white-space: nowrap;
        font-size: .85em;
        font-size: var(--fc-small-font-size, .85em);
        margin-bottom: 1px;
    }

    .fc-timegrid-event-short .fc-event-main-frame {
        flex-direction: row;
        overflow: hidden;
    }

    .fc-timegrid-event-short .fc-event-time:after {
        content: '\00a0-\00a0';
        /* dash surrounded by non-breaking spaces */
    }

    .fc-timegrid-event-short .fc-event-title {
        font-size: .85em;
        font-size: var(--fc-small-font-size, .85em)
    }

    .fc-timegrid-more-link {
        /* does NOT inherit from fc-timegrid-event */
        position: absolute;
        z-index: 9999;
        /* hack */
        color: inherit;
        color: var(--fc-more-link-text-color, inherit);
        background: #d0d0d0;
        background: var(--fc-more-link-bg-color, #d0d0d0);
        cursor: pointer;
        margin-bottom: 1px;
        /* match space below fc-timegrid-event */
    }

    .fc-timegrid-more-link-inner {
        /* has fc-sticky */
        padding: 3px 2px;
        top: 0;
    }

    .fc-direction-ltr .fc-timegrid-more-link {
        right: 0;
    }

    .fc-direction-rtl .fc-timegrid-more-link {
        left: 0;
    }

    .fc {

        /* line */

    }

    .fc .fc-timegrid-now-indicator-line {
        position: absolute;
        z-index: 4;
        left: 0;
        right: 0;
        border-style: solid;
        border-color: red;
        border-color: var(--fc-now-indicator-color, red);
        border-width: 1px 0 0;
    }

    .fc {

        /* arrow */

    }

    .fc .fc-timegrid-now-indicator-arrow {
        position: absolute;
        z-index: 4;
        margin-top: -5px;
        /* vertically center on top coordinate */
        border-style: solid;
        border-color: red;
        border-color: var(--fc-now-indicator-color, red);
    }

    .fc-direction-ltr .fc-timegrid-now-indicator-arrow {
        left: 0;

        /* triangle pointing right. TODO: mixin */
        border-width: 5px 0 5px 6px;
        border-top-color: transparent;
        border-bottom-color: transparent;
    }

    .fc-direction-rtl .fc-timegrid-now-indicator-arrow {
        right: 0;

        /* triangle pointing left. TODO: mixin */
        border-width: 5px 6px 5px 0;
        border-top-color: transparent;
        border-bottom-color: transparent;
    }
</style>