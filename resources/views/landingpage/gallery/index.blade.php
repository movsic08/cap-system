<x-landing-page-layout>
    <h2 class="text-center text-3xl font-extrabold font-playfair uppercase mt-4 mb-8">St Joseph Cathedral's Gallery</h2>

    <div class="mx-auto max-w-7xl px-6">
        <div class="mx-auto max-w-2xl py-4 lg:max-w-none ">
            <div class="grid lg:grid-cols-3 lg:gap-x-6 gap-y-6">
                @foreach ($images as $image )
                <div class="group relative">
                    <div
                        class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                        <img src="{{ asset('storage/' . $image->images) }}" alt="St. Joseph Parish"
                            class="h-full w-full object-cover object-center">
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</x-landing-page-layout>