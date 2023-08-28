<x-landing-page-layout>
    <div class="flex mt-10 flex-col justify-center  gap-4 items-center">
        <div>
            <h2 class="font-playfair text-6xl font-bold">
                St. Joseph Cathedral Parish
            </h2>
            <p class="text-center mt-2 text-xl">Alaminos City, Pangasinan, Philippines</p>

            <div class="flex items-center justify-center">
                <a href="{{ route('schedule-event.index') }}"
                    class="mt-6 flex items-center justify-center rounded-md border border-transparent bg-[#b17b16] px-8 py-3 text-base font-medium text-white hover:bg-[#926614]  focus:outline-none focus:ring-2 focus:ring-[#b17b16] focus:ring-offset-2">
                    Schedule Now
                </a>
            </div>
        </div>


        <div class="flex items-center mt-10 gap-10">
            <div
                class="bg-slate-900 overflow-hidden outline outline-offset-8 border border-[#ffd585] outline-2 outline-[#ffd585] h-[20rem] w-[10.5rem] rounded-full">
                <img class="h-full object-cover w-full"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Guido_Reni_-_Saint_Joseph_and_the_Christ_Child_-_Google_Art_Project.jpg/240px-Guido_Reni_-_Saint_Joseph_and_the_Christ_Child_-_Google_Art_Project.jpg"
                    alt="">
            </div>
            <div
                class="bg-slate-900 overflow-hidden outline outline-offset-8 border border-[#ffd585] outline-2 outline-[#ffd585] h-[25rem] w-[15.5rem] rounded-full">
                <img class="h-full object-cover w-full" src="{{ asset('background-image.jpg') }}" alt="">
            </div>
            <div
                class="bg-slate-900 overflow-hidden outline outline-offset-8 border border-[#ffd585] outline-2 outline-[#ffd585] h-[20rem] w-[10.5rem] rounded-full">
                <img class="h-full object-cover w-full"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjb3zMMOa7OtaC2JyYLHnOhzLWhZrlCpFJqP0OxPlqSgdgwJi7GhQeQ_N5rGCQHGBXf-U&usqp=CAU"
                    alt="">
            </div>
        </div>
    </div>

</x-landing-page-layout>