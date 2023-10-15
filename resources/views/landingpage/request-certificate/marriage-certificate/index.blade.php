<x-landing-page-layout>
    <form action="{{ route('request-marriage-certificate.store') }}" method="POST">
        @csrf
        <div class="space-y-12 mx-6">
            <div class="border-b bg-green-700 p-6 rounded-lg border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-white">Marriage Certificate</h2>
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
                        <label for="brides_father" class="block text-sm font-medium leading-6 text-gray-200">
                            Bride's Father Name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="brides_father" id="brides_father"
                                value="{{ old('brides_father') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('brides_father')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="brides_mother" class="block text-sm font-medium leading-6 text-gray-200">
                            Bride's Mother Name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="brides_mother" id="brides_mother"
                                value="{{ old('brides_mother') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('brides_mother')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="grooms_father" class="block text-sm font-medium leading-6 text-gray-200">
                            Groom's Father Name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="grooms_father" id="grooms_father"
                                value="{{ old('grooms_father') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('grooms_father')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="grooms_mother" class="block text-sm font-medium leading-6 text-gray-200">
                            Groom's Mother Name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="grooms_mother" id="grooms_mother"
                                value="{{ old('grooms_mother') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('grooms_mother')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="grooms_age" class="block text-sm font-medium leading-6 text-gray-200">
                            Groom's Age
                        </label>
                        <div class="mt-2">
                            <input type="number" name="grooms_age" id="grooms_age" value="{{ old('grooms_age') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('grooms_age')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="brides_age" class="block text-sm font-medium leading-6 text-gray-200">
                            Bride's Age
                        </label>
                        <div class="mt-2">
                            <input type="number" name="brides_age" id="brides_age" value="{{ old('brides_age') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('brides_age')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="marriage_date" class="block text-sm font-medium leading-6 text-gray-200">
                            Wedding Date
                        </label>
                        <div class="mt-2">
                            <input type="date" name="marriage_date" id="marriage_date"
                                value="{{ old('marriage_date') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('marriage_date')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="officiated_by" class="block text-sm font-medium leading-6 text-gray-200">
                            Officiated By
                        </label>
                        <div class="mt-2">
                            <input type="text" name="officiated_by" id="officiated_by"
                                value="{{ old('officiated_by') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('officiated_by')" />
                        </div>
                    </div>

                    <div class="sm:col-span-6">
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