@if (session('modal-certificate-message'))
<div x-data="{open:true}" class="inline text-black">
    <div x-show="open" x-cloak x-on:click="open = false"
        class="bg-black/40 z-[1000] fixed top-0 bottom-0 right-0 left-0">
    </div>


    <div x-show="open" x-cloak>
        <div
            class="fixed z-[10001] bg-slate-50 shadow-md rounded-md top-2/4 left-2/4 w-[90%] sm:w-2/4 -translate-y-2/4 -translate-x-2/4">

            <header class="flex justify-between items-center  p-4 border rounded-md border-b-1 border-gray-200">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                    <img class="h-[32px]" src="{{ asset('logo.png') }}" alt="logo">
                    <span class="font-semibold">St. Joseph Cathedral Parish </span>
                </a>
                <svg x-on:click="open = false" class="h-4 w-4 cursor-pointer" viewBox="0 0 16 16" fill="gray">
                    <path
                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                    </path>
                </svg>
            </header>

            <div class="p-6">
                <h2 class="px-4 py-2 bg-indigo-600 text-white rounded">Submitted Successfully!</h2>
                <p class="mt-4">
                    Thank you for submitting your certificate request! Your request has been received. Please visit the
                    church office after one week to collect your certificate. Kindly prepare the necessary amount for
                    the certificate fee. If you have any further questions, feel free to contact us at. Have a blessed
                    day!
                </p>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button" x-on:click="open = false"
                    class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 sm:ml-3 sm:w-auto">Close</button>
            </div>
        </div>
    </div>
</div>
@endif