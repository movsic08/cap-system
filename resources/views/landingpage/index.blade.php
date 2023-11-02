<x-landing-page-layout>
    <div class="flex mt-10 flex-col justify-center  gap-4 items-center overflow-x-hidden">
        <div>
            <h2 class="font-playfair text-4xl text-center sm:text-6xl font-bold">
                St. Joseph Cathedral Parish
            </h2>
            <p class="text-center mt-2 text-lg sm:text-xl">Alaminos City, Pangasinan, Philippines</p>

            <div class="flex items-center gap-4 justify-center">
                <a href="{{ route('schedule-event.index') }}"
                    class="mt-6 flex items-center justify-center rounded-md border border-transparent bg-[#b17b16] px-5 sm:px-8 py-3 text-sm sm:text-base font-medium text-white hover:bg-[#926614]  focus:outline-none focus:ring-2 focus:ring-[#b17b16] focus:ring-offset-2">
                    Schedule Now
                </a>
                <a href="{{ route('request-certificate.index') }}"
                    class="mt-6 flex items-center justify-center rounded-md border border-gray-300  bg-transparent px-5 sm:px-8 py-3 text-sm sm:text-base font-medium text-white hover:bg-gray-700  focus:outline-none focus:ring-2 focus:ring-[#b17b16] focus:ring-offset-2">
                    Request Certificate
                </a>
            </div>
        </div>


        <div class="flex items-center mt-10 gap-10">
            <div
                class="bg-slate-900 overflow-hidden outline outline-offset-8 border border-[#ffd585] outline-2 outline-[#ffd585] h-[16rem] sm:h-[20rem] w-[9rem] sm:w-[10.5rem] rounded-full">
                <img class="h-full object-cover w-full"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Guido_Reni_-_Saint_Joseph_and_the_Christ_Child_-_Google_Art_Project.jpg/240px-Guido_Reni_-_Saint_Joseph_and_the_Christ_Child_-_Google_Art_Project.jpg"
                    alt="">
            </div>
            <div
                class="bg-slate-900 overflow-hidden outline outline-offset-8 border border-[#ffd585] outline-2 outline-[#ffd585] h-[16rem] sm:h-[25rem] w-[9rem] sm:w-[15.5rem] rounded-full">
                <img class="h-full object-cover w-full" src="{{ asset('background-image.jpg') }}" alt="">
            </div>
            <div
                class="bg-slate-900 overflow-hidden outline outline-offset-8 border border-[#ffd585] outline-2 outline-[#ffd585] h-[16rem] sm:h-[20rem] w-[9rem] sm:w-[10.5rem] rounded-full">
                <img class="h-full object-cover w-full"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjb3zMMOa7OtaC2JyYLHnOhzLWhZrlCpFJqP0OxPlqSgdgwJi7GhQeQ_N5rGCQHGBXf-U&usqp=CAU"
                    alt="">
            </div>
        </div>

        <div class="py-10">
            <div class=" mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8">
                <div class=" mx-auto divide-y-2 divide-gray-200">
                    <h2 class="text-center text-3xl font-extrabold font-playfair text-white sm:text-4xl">Frequently
                        asked
                        questions
                    </h2>
                    <dl class="mt-6 space-y-6 divide-y divide-gray-200">
                        @foreach ($faqs as $faq)
                        <div class="pt-6">
                            <dt class="text-lg">
                                <!-- Expand/collapse question button -->
                                <button type="button"
                                    class="text-left w-full flex justify-between items-start text-gray-400"
                                    aria-controls="faq-0" aria-expanded="false">
                                    <span class="font-medium text-gray-100">
                                        {{ $faq["question"] }}
                                    </span>
                                </button>
                            </dt>
                            <dd class="mt-2 pr-12" id="faq-0">
                                <p class="text-base text-gray-300">
                                    {{ $faq["answer"] }}
                                </p>
                            </dd>
                        </div>
                        @endforeach

                        <!-- More questions... -->
                    </dl>
                </div>
            </div>
        </div>
    </div>

</x-landing-page-layout>