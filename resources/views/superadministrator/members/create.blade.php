<x-app-layout>
    <form action="{{ route('member.store') }}" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Member Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Please provide an information.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <div class="sm:col-span-6">
                        <label for="organization_id"
                            class="block text-sm font-medium leading-6 text-gray-900">Organization</label>
                        <div class="mt-2">
                            <select id="organization_id" name="organization_id"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600  sm:text-sm sm:leading-6">
                                <option selected disabled hidden>Select Organization</option>
                                @foreach ($organizations as $organization)
                                <option {{ old('organization_id')==$organization->id ? 'selected' : '' }}
                                    value="{{ $organization->id }}">{{ $organization->organization_name }}</option>
                                @endforeach
                                </option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('organization_id')" />
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="member_id" class="block text-sm font-medium leading-6 text-gray-900">
                            Member ID
                        </label>


                        <div class="mt-2">
                            <input type="text" name="member_id" id="member_id" value="{{ old('member_id') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('member_id')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                            Full Name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                        <div class="mt-2">
                            <select id="gender" name="gender"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600  sm:text-sm sm:leading-6">
                                <option selected disabled hidden>Select Gender</option>
                                <option {{ old('gender')=='male' ? 'selected' : '' }} value="male">Male</option>
                                <option {{ old('gender')=='female' ? 'selected' : '' }} value="female">Female
                                </option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('gender')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="date_of_birth" class="block text-sm font-medium leading-6 text-gray-900">
                            Date of Birth
                        </label>
                        <div class="mt-2">
                            <input type="date" name="date_of_birth" id="date_of_birth"
                                value="{{ old('date_of_birth') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('date_of_birth')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="address" class="block text-sm font-medium leading-6 text-gray-900">
                            Address
                        </label>
                        <div class="mt-2">
                            <input type="text" name="address" id="address" value="{{ old('address') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('address')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">
                            Phone Number
                        </label>
                        <div class="mt-2">
                            <input type="number" name="phone_number" id="phone_number" value="{{ old('phone_number') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('member.index') }}" type="button"
                class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>

</x-app-layout>