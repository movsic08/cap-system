<x-app-layout>
    <div class="lg:flex lg:items-center lg:justify-between">
        <div class="min-w-0 flex-1">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">
                Baptismal Certificate
            </h2>
            <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-6">
                <div class="mt-2 flex items-center text-sm text-gray-500">
                    <svg class="mr-1.5 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z"
                            clip-rule="evenodd" />
                    </svg>
                    Requested on {{
                    \Carbon\Carbon::parse($requestedBaptismalCertificate->created_at)->isoFormat('MMM
                    D
                    YYYY')
                    }}
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{
                        $requestedBaptismalCertificate->first_name }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Email Address</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{
                        $requestedBaptismalCertificate->email }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Child's Name</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{
                        $requestedBaptismalCertificate->childs_name }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Father's Name</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{
                        $requestedBaptismalCertificate->fathers_name }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Mother's Name</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{
                        $requestedBaptismalCertificate->mothers_name }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Place of Birth</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{
                        $requestedBaptismalCertificate->place_of_birth }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Date of Birth</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        {{
                        \Carbon\Carbon::parse($requestedBaptismalCertificate->childs_birthdate)->isoFormat('MMM
                        D
                        YYYY')
                        }}
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Date of Baptism</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        {{
                        \Carbon\Carbon::parse($requestedBaptismalCertificate->baptism_date)->isoFormat('MMM
                        D
                        YYYY')
                        }}
                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Baptized by</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                        {{
                        $requestedBaptismalCertificate->baptized_by }}
                    </dd>
                </div>
                @php
                $sponsors = explode(',', $requestedBaptismalCertificate->sponsors);
                @endphp
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">Sponsors</dt>
                    <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                        <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                            @foreach ($sponsors as $sponsor)
                            <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                <div class="flex w-0 flex-1 items-center">
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>

                                    <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                        <span>{{ $sponsor }}</span>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</x-app-layout>