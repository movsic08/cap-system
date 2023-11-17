<x-landing-page-layout>
    <form action="{{ route('request-death-certificate.store') }}" method="POST">
        @csrf
        <div class="space-y-12 mx-6">
            <div class="border-b bg-green-700 p-6 rounded-lg border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-white">Death Certificate</h2>
                <p class="mb-1 text-sm leading-6 text-gray-50">Use a permanent address where you can receive mail.</p>
                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="first_name" class="block text-sm font-medium leading-6 text-gray-200">
                            Requested by
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
                        <label for="deceased_name" class="block text-sm font-medium leading-6 text-gray-200">
                            Deceased Name +
                        </label>
                        <div class="mt-2">
                            <input type="text" name="deceased_name" id="deceased_name"
                                value="{{ old('deceased_name') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('deceased_name')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="deceased_age" class="block text-sm font-medium leading-6 text-gray-200">
                            Deceased Age
                        </label>
                        <div class="mt-2">
                            <input type="number" name="deceased_age" id="deceased_age" value="{{ old('deceased_age') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('deceased_age')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="deceased_address" class="block text-sm font-medium leading-6 text-gray-200">
                            Deceased Address
                        </label>
                        <div class="mt-2">
                            <input type="text" name="deceased_address" id="deceased_address"
                                value="{{ old('deceased_address') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('deceased_address')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="cause_of_death" class="block text-sm font-medium leading-6 text-gray-200">
                            Cause of Death
                        </label>
                        <div class="mt-2">
                            <input type="text" name="cause_of_death" id="cause_of_death"
                                value="{{ old('cause_of_death') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('cause_of_death')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="date_of_death" class="block text-sm font-medium leading-6 text-gray-200">
                            Date of Death
                        </label>
                        <div class="mt-2">
                            <input type="date" name="date_of_death" id="date_of_death"
                                value="{{ old('date_of_death') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('date_of_death')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="interment_date" class="block text-sm font-medium leading-6 text-gray-200">
                            Interment Date
                        </label>
                        <div class="mt-2">
                            <input type="date" name="interment_date" id="interment_date"
                                value="{{ old('interment_date') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('interment_date')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="interment_location" class="block text-sm font-medium leading-6 text-gray-200">
                            Interment Location
                        </label>
                        <div class="mt-2">
                            <input type="text" name="interment_location" id="interment_location"
                                value="{{ old('interment_location') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('interment_location')" />
                        </div>
                    </div>

                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="/request-certificate" class="text-base font-semibold leading-6 text-white">Cancel</a>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-6 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </form>


</x-landing-page-layout>