<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div
        class="relative  bg-gradient-to-r  text-white from-emerald-700 to-green-400 p-4 sm:p-6 rounded-lg overflow-hidden mb-4">
        <div class="relative">
            <h1 class="text-2xl md:text-3xl font-bold">
                Good <span class="greeting"></span>, {{ Auth::user()->name }}
            </h1>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-2">
        @include('superadministrator.dashboard.partials.stat-cards')
    </div>
</x-app-layout>


<script>
    // set greeting
  const greeting = document.querySelector('.greeting');
  console.log(greeting);
  let today = new Date(),
    hour = today.getHours();
  if (hour < 12) {
    // morning
    greeting.textContent = 'morning';
  } else if (hour < 18) {
    greeting.textContent = 'afternoon';
  } else {
    greeting.textContent = 'evening';
  }
</script>