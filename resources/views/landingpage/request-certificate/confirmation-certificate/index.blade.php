<x-landing-page-layout>
    <form action="{{ route('request-confirmation-certificate.store') }}" method="POST">
        @csrf
        <div class="space-y-12 mx-6">
            <div class="border-b bg-green-700 p-6 rounded-lg border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-white">Death Certificate</h2>
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
                        <label for="confirmation_name" class="block text-sm font-medium leading-6 text-gray-200">
                            Confirmation Name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="confirmation_name" id="confirmation_name"
                                value="{{ old('confirmation_name') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('confirmation_name')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="fathers_name" class="block text-sm font-medium leading-6 text-gray-200">
                            Father's Name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="fathers_name" id="fathers_name" value="{{ old('fathers_name') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('fathers_name')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="mothers_name" class="block text-sm font-medium leading-6 text-gray-200">
                            Mother's Name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="mothers_name" id="mothers_name" value="{{ old('mothers_name') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('mothers_name')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="place_of_birth" class="block text-sm font-medium leading-6 text-gray-200">
                            Place of Birth
                        </label>
                        <div class="mt-2">
                            <input type="text" name="place_of_birth" id="place_of_birth"
                                value="{{ old('place_of_birth') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('place_of_birth')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="confirmation_date" class="block text-sm font-medium leading-6 text-gray-200">
                            Confirmation Date
                        </label>
                        <div class="mt-2">
                            <input type="date" name="confirmation_date" id="confirmation_date"
                                value="{{ old('confirmation_date') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('confirmation_date')" />
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