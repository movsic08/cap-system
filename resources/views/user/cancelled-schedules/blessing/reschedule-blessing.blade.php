<div x-data="{createOpen:false}" class="inline text-black">
    <button x-on:click="createOpen = true" class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">

        <span class="xs:block text-sm ">Reschedule</span>
    </button>
    <div x-show="createOpen" x-cloak x-on:click="createOpen = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>

    <div x-show="createOpen" x-cloak>
        <div class="absolute bg-slate-50 shadow-md rounded-md top-2/4 left-2/4 w-3/4 -translate-y-2/4 -translate-x-2/4"
            style="z-index: 501;">

            <header class="flex justify-between items-center  p-4 border rounded-md border-b-1 border-gray-200">
                <h2 class="font-medium">Reschedule</h2>
                <svg x-on:click="createOpen = false" class="h-4 w-4 cursor-pointer" viewBox="0 0 16 16" fill="gray">
                    <path
                        d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z">
                    </path>
                </svg>
            </header>
            <form class=" p-4" action="{{ route('reschedule-appointment-blessing') }}" method="POST">
                @csrf
                @csrf
                <input type="hidden" name="id" value="{{ $blessingRequestedSchedule->id }}">
                <div>
                    <x-input-label class="text-slate-800" for="desired_date" :value="__('Desired New Date')" />
                    <x-text-input id="desired_date" class="block mt-1 w-full" type="date" name="desired_date"
                        :value="old('desired_date', $blessingRequestedSchedule->desired_date)" required autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('desired_date')" />
                </div>
                <button
                    class="mt-4 bg-indigo-500 hover:bg-indigo-600 inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest  active:bg-indigo-900 focus:outline-none focus:border-v-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('Reschedule') }}
                </button>
            </form>
        </div>
    </div>
</div>