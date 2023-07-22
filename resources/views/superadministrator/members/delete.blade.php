<div x-data="{open:false}" class="inline">
    <button x-on:click="open = true" class="px-3 py-1.5 hover:bg-red-800 bg-red-700 rounded text-white">
        Delete
    </button>
    <div x-show="open" x-cloak x-on:click="open = false"
        class="bg-black/40 z-[500] fixed top-0 bottom-0 right-0 left-0">
    </div>
    {{-- delete modal --}}
    <div x-show="open" x-cloak>
        <div class="absolute top-2/4 left-2/4 z-[501] transform -translate-x-2/4 -translate-y-2/4">
            <div class="p-4 text-left bg-white shadow-lg rounded-lg w-[28rem]">
                <header class="text-gray-800 font-bold mb-2">
                    Are you sure?
                </header>
                <p class="text-sm text-slate-700">
                    This action will permanently delete.
                    This cannot be undone.
                </p>
                <div class="flex justify-end gap-2 mt-4">
                    <div x-on:click="open = false"
                        class="text-sm py-2 px-4 cursor-pointer text-gray-600 border border-gray-400 bg-gray-50 hover:border-gray-600 rounded-md">
                        Cancel
                    </div>
                    <form method="POST" action="{{ route('member.destroy', $member) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="text-sm cursor-pointer py-2 px-4 bg-red-500 hover:bg-red-600 text-white rounded-md">
                            Yes, Delete it
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
