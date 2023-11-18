<div style="display: none;" class="modal-container fixed inset-0 z-10 w-screen overflow-y-auto">
    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
        <div
            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-5xl">
            <div class="bg-white p-4 ">
                <form action="{{ route('baptismal-schedule-form.store') }}" method="POST">
                    @csrf
                    <div class="space-y-12">
                        <div class="border-b bg-slate-900 overflow-y-auto p-6 rounded-lg border-gray-900/10 pb-12">
                            <header class="flex justify-between items-center">
                                <div>
                                    <p id="selected-date">Date selected:
                                    </p>
                                    <h2 class="text-base font-semibold leading-7 text-white">Baptismal Schedule
                                        Form
                                        <span class="hidden special-content">
                                            (Special)
                                        </span>
                                        <span class="hidden regular-content">
                                            (Regular)
                                        </span>
                                    </h2>
                                    <p class="mb-1 text-sm leading-6 text-gray-50">Use a permanent address where
                                        you
                                        can
                                        receive mail.
                                    </p>
                                </div>
                                <div>
                                    <svg id="close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="cursor-pointer w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </div>
                            </header>

                            {{-- <div class="hidden regular-content">
                                this is wednesday content
                            </div>
                            <div class="hidden regular-content">
                                this is thursday content
                            </div>
                            <div class="hidden regular-content">
                                this is saturday content
                            </div>
                            --}}

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
                                        <input type="text" name="email" id="email"
                                            value="{{ old('email', Auth::user()->email) }}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="childs_name" class="block text-sm font-medium leading-6 text-gray-200">
                                        Child's name
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="childs_name" id="childs_name"
                                            value="{{ old('childs_name') }}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <x-input-error class="mt-2" :messages="$errors->get('childs_name')" />
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
                                    <label for="desired_date" class="block text-sm font-medium leading-6 text-gray-200">
                                        Desired Date
                                    </label>
                                    <div class="mt-2">
                                        <input type="date" name="desired_date" id="desired_date"
                                            value="{{ old('desired_date') }}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <x-input-error class="mt-2" :messages="$errors->get('desired_date')" />
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="desired_time" class="block text-sm font-medium leading-6 text-gray-200">
                                        Desired Time
                                    </label>
                                    <div class="mt-2">
                                        <select id="desired_time" name="desired_time" autocomplete="desired_time"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option value="08:00 AM to 09:00 AM" class="hidden special-content">
                                                08:00 AM to 09:00 AM</option>
                                            <option class="hidden special-content" value="09:00 AM to 10:00 AM">
                                                09:00 AM to 10:00 AM</option>
                                            <option value="10:00 AM to 11:00 AM">10:00 AM to 11:00 AM</option>
                                            <option class="hidden special-content" value="11:00 AM to 12:00 PM">
                                                11:00 AM to 12:00 PM</option>
                                            <option class="hidden special-content" value="02:00 PM to 03:00 PM">
                                                02:00 PM to 03:00 PM</option>
                                            <option class="hidden special-content" value="03:00 PM to 04:00 PM">
                                                03:00 PM to 04:00 PM</option>
                                            <option class="hidden special-content" value="04:00 PM to 05:00 PM">
                                                04:00 PM to 05:00 PM</option>
                                        </select>
                                        <x-input-error class="mt-2" :messages="$errors->get('desired_time')" />
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="mothers_name" class="block text-sm font-medium leading-6 text-gray-200">
                                        Mother's Name
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="mothers_name" id="mothers_name"
                                            value="{{ old('mothers_name') }}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <x-input-error class="mt-2" :messages="$errors->get('mothers_name')" />
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="mothers_contact_number"
                                        class="block text-sm font-medium leading-6 text-gray-200">
                                        Mother's Contact Number
                                    </label>
                                    <div class="mt-2">
                                        <input type="number" name="mothers_contact_number" id="mothers_contact_number"
                                            value="{{ old('mothers_contact_number') }}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <x-input-error class="mt-2"
                                            :messages="$errors->get('mothers_contact_number')" />
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="fathers_name" class="block text-sm font-medium leading-6 text-gray-200">
                                        Father's Name
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="fathers_name" id="fathers_name"
                                            value="{{ old('fathers_name') }}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <x-input-error class="mt-2" :messages="$errors->get('fathers_name')" />
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="fathers_contact_number"
                                        class="block text-sm font-medium leading-6 text-gray-200">
                                        Fathers's Contact Number
                                    </label>
                                    <div class="mt-2">
                                        <input type="number" name="fathers_contact_number" id="fathers_contact_number"
                                            value="{{ old('fathers_contact_number') }}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <x-input-error class="mt-2"
                                            :messages="$errors->get('fathers_contact_number')" />
                                    </div>
                                </div>

                                <div class="sm:col-span-3 ">
                                    <label for="childs_birthdate"
                                        class="block text-sm font-medium leading-6 text-gray-200">
                                        Child's Birthday
                                    </label>
                                    <div class="mt-2">
                                        <input type="date" name="childs_birthdate" id="childs_birthdate"
                                            value="{{ old('childs_birthdate') }}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <x-input-error class="mt-2" :messages="$errors->get('childs_birthdate')" />
                                    </div>
                                </div>

                                <div class="sm:col-span-3 ">
                                    <label for="childs_birthplace"
                                        class="block text-sm font-medium leading-6 text-gray-200">
                                        Child's Birthplace
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="childs_birthplace" id="childs_birthplace"
                                            value="{{ old('childs_birthplace') }}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <x-input-error class="mt-2" :messages="$errors->get('childs_birthplace')" />
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="godfather" class="block text-sm font-medium leading-6 text-gray-200">
                                        Godfather
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="godfather" id="godfather"
                                            value="{{ old('godfather') }}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <x-input-error class="mt-2" :messages="$errors->get('godfather')" />
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="godmother" class="block text-sm font-medium leading-6 text-gray-200">
                                        Godmother
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="godmother" id="godmother"
                                            value="{{ old('godmother') }}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <x-input-error class="mt-2" :messages="$errors->get('godmother')" />
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="parish_priest"
                                        class="block text-sm font-medium leading-6 text-gray-200">
                                        Parish Priest
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="parish_priest" id="parish_priest"
                                            value="{{ old('parish_priest') }}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <x-input-error class="mt-2" :messages="$errors->get('parish_priest')" />
                                    </div>
                                </div>

                                <div class="sm:col-span-3">
                                    <label for="sponsors" class="block text-sm font-medium leading-6 text-gray-200">
                                        Sponsors (separate with comma)
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="sponsors" id="sponsors" value="{{ old('sponsors') }}"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <x-input-error class="mt-2" :messages="$errors->get('sponsors')" />
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 sm:col-span-6">
                                <label for="message" class="block text-sm font-medium leading-6 text-gray-200">
                                    Message <span class="text-xs">(optional)</span>
                                </label>
                                <textarea id="message" name="message" rows="3"
                                    class="block mt-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('message') }}</textarea>
                                <x-input-error class="mt-2" :messages="$errors->get('message')" />
                            </div>


                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <button type="button" id="cancel"
                                    class="text-base font-semibold leading-6 text-white">Cancel</button>

                                <button type="button" x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-form')"
                                    class="rounded-md bg-indigo-600 px-6 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    Continue
                                </button>
                                @include('landingpage.schedule-events.baptism.finalize-baptism-form')
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>