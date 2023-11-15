<x-landing-page-layout>

    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div style="display: none;" class="overlay fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <div style="display: none;" class="modal-container  fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex  min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-5xl">
                    <div class="bg-white p-4 ">
                        <form action="{{ route('blessing-schedule-form.store') }}" method="POST">
                            @csrf
                            <div class="space-y-12">
                                <div
                                    class="border-b bg-slate-900 overflow-y-auto p-6 rounded-lg border-gray-900/10 pb-12">
                                    <header class="flex justify-between items-center">
                                        <div>
                                            <h2 class="text-base font-semibold leading-7 text-white">Blessing Schedule
                                                Form</h2>
                                            <p class="mb-1 text-sm leading-6 text-gray-50">Use a permanent address where
                                                you can
                                                receive mail.</p>
                                        </div>
                                        <div>
                                            <svg id="close" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="cursor-pointer w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </div>
                                    </header>
                                    <div class=" mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                                        <div class="sm:col-span-3">
                                            <label for="first_name"
                                                class="block text-sm font-medium leading-6 text-gray-200">
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
                                            <label for="email"
                                                class="block text-sm font-medium leading-6 text-gray-200">
                                                Email Address
                                            </label>
                                            <div class="mt-2">
                                                <input type="text" name="email" id="email"
                                                    value="{{ old('email', Auth::user()->email) }}"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label for="blessing_for"
                                                class="block text-sm font-medium leading-6 text-gray-200">
                                                Blessing for
                                            </label>
                                            <div class="mt-2">
                                                <input type="text" name="blessing_for" id="blessing_for"
                                                    value="{{ old('blessing_for') }}"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <x-input-error class="mt-2" :messages="$errors->get('blessing_for')" />
                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label for="address"
                                                class="block text-sm font-medium leading-6 text-gray-200">
                                                Address
                                            </label>
                                            <div class="mt-2">
                                                <input type="text" name="address" id="address"
                                                    value="{{ old('address') }}"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <x-input-error class="mt-2" :messages="$errors->get('address')" />
                                            </div>
                                        </div>

                                        <div class="sm:col-span-3">
                                            <label for="desired_date"
                                                class="block text-sm font-medium leading-6 text-gray-200">
                                                Desired Date
                                            </label>
                                            <div class="mt-2">
                                                <input type="date" name="desired_date" id="desired_date"
                                                    value="{{ old('desired_date') }}"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <x-input-error class="mt-2" :messages="$errors->get('desired_date')" />
                                            </div>
                                        </div>


                                        <div class="sm:col-span-3">
                                            <label for="desired_time"
                                                class="block text-sm font-medium leading-6 text-gray-200">
                                                Desired Time
                                            </label>
                                            <div class="mt-2">
                                                <select id="desired_time" name="desired_time"
                                                    autocomplete="desired_time"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    <option class="" value="07:00 AM">
                                                        08:00 AM
                                                    </option>
                                                    <option class="" value="08:45 AM">
                                                        08:45 AM
                                                    </option>
                                                    <option class="" value="09:30 AM">
                                                        09:30 AM
                                                    </option>
                                                    <option class="" value="10:15 AM">
                                                        10:15 AM
                                                    </option>
                                                    <option class="" value=" 10:30 AM">
                                                        10:30 AM
                                                    </option>
                                                    <option class="" value="01:00 PM">
                                                        01:00 PM
                                                    </option>
                                                    <option class="" value="01:45 PM">
                                                        01:45 PM
                                                    </option>
                                                    <option class="" value="02:30 PM">
                                                        02:30 PM
                                                    </option>

                                                </select>
                                                <x-input-error class="mt-2" :messages="$errors->get('desired_time')" />
                                            </div>
                                        </div>


                                        <div class="sm:col-span-3">
                                            <label for="contact_number"
                                                class="block text-sm font-medium leading-6 text-gray-200">
                                                Contact Number
                                            </label>
                                            <div class="mt-2">
                                                <input type="number" name="contact_number" id="contact_number"
                                                    value="{{ old('contact_number') }}"
                                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <x-input-error class="mt-2"
                                                    :messages="$errors->get('contact_number')" />
                                            </div>
                                        </div>


                                        <div class="sm:col-span-6">
                                            <label for="message"
                                                class="block text-sm font-medium leading-6 text-gray-200">
                                                Message <span class="text-xs">(optional)</span>
                                            </label>
                                            <textarea id="message" name="message" rows="3"
                                                class="block mt-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('message') }}</textarea>
                                            <x-input-error class="mt-2" :messages="$errors->get('message')" />
                                        </div>
                                    </div>
                                    <div class="mt-6 flex items-center justify-end gap-x-6">
                                        <button type="button" id="cancel"
                                            class="text-base font-semibold leading-6 text-white">Cancel</button>
                                        <button type="button" x-data=""
                                            x-on:click.prevent="$dispatch('open-modal', 'confirm-form')"
                                            class="rounded-md bg-indigo-600 px-6 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                            Continue
                                        </button>
                                        @include('landingpage.schedule-events.blessing.finalize-blessing-form')
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-green-700 mt-4 rounded p-4" id="calendar"></div>


    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            const approvedDate = @json($events).map(event => event.date).join(', ');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                height: 720,
                initialView: 'dayGridMonth',
                slotMinTime: '8:00:00',
                slotMaxTime: '19:00:00',
                events: @json($events),
                dateClick: function(info) {
                    if (approvedDate.includes(info.dateStr)) {
                        alert("This date is already taken.");
                        return false; // Prevent navigating to this date
                    }

                               // Get the clicked date
                    const clickedDate = info.date;
                    // Check if the clicked date is in the past
                    if (clickedDate < new Date()) {
                        alert('You clicked on a past date!');
                    } else {
                        // Show modal when a date is clicked
                        document.querySelector('.modal-container').style.display = 'block';
                        document.querySelector('.overlay').style.display = 'block';
                        var selectedDate = info.dateStr;
                        document.getElementById("desired_date").value = selectedDate;
                    }

                }


            });
            calendar.render();
        });

        document.querySelector('#close').addEventListener("click", () => {
            document.querySelector('.modal-container').style.display = 'none';
            document.querySelector('.overlay').style.display = 'none';
        });

        document.querySelector('#cancel').addEventListener("click", () => {
            document.querySelector('.modal-container').style.display = 'none';
            document.querySelector('.overlay').style.display = 'none';
        });

         // Get references to the input fields and display elements
         const inputs = [
            document.getElementById("first_name"),
            document.getElementById("email"),
            document.getElementById("blessing_for"),
            document.getElementById("address"),
            document.getElementById("desired_date"),
            document.getElementById("desired_time"),
            document.getElementById("contact_number"),
            document.getElementById("message"),
        ];
        const displays = [
            document.getElementById("display1"),
            document.getElementById("display2"),
            document.getElementById("display3"),
            document.getElementById("display4"),
            document.getElementById("display5"),
            document.getElementById("display6"),
            document.getElementById("display7"),
            document.getElementById("display8"),

        ];

        // Initialize the data model
        var array = [];
        for (let i = 0; i < inputs.length; i++) {
            let element = inputs[i].value;
            array.push(element);
        }

        let dataModel = array;

        // Function to update the UI with the current data model values
        function updateUI() {
            for (let i = 0; i < inputs.length; i++) {
                dataModel[i] === "" ? displays[i].textContent = "No Data Entered" : displays[i].textContent = dataModel[i];
            }
        }

        // Function to update the data model with the input values
        function updateDataModel(index) {
            dataModel[index] = inputs[index].value;
            updateUI();
        }

        // Add event listeners for input changes and initial UI update
        for (let i = 0; i < inputs.length; i++) {

            inputs[i].addEventListener("input", (event) => {
                updateDataModel(i);
            });
        }

        // Initialize the UI with the current data model values
        updateUI();
    </script>
    @endpush
</x-landing-page-layout>


<style>
    .fc-v-event {
        /* allowed to be top-level */
        display: block;
        border: 1px solid #3788d8;
        border: 1px solid var(--fc-event-border-color, #3788d8);
        background-color: #3788d8;
        background-color: var(--fc-event-bg-color, #3788d8)
    }

    .fc-v-event .fc-event-main {
        color: #fff;
        color: var(--fc-event-text-color, #fff);
    }

    .fc-v-event .fc-event-main-frame {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .fc-v-event .fc-event-time {
        flex-grow: 0;
        flex-shrink: 0;
        max-height: 100%;
        overflow: hidden;
    }

    .fc-v-event .fc-event-title-container {
        /* a container for the sticky cushion */
        flex-grow: 1;
        flex-shrink: 1;
        min-height: 0;
        /* important for allowing to shrink all the way */
    }

    .fc-v-event .fc-event-title {
        /* will have fc-sticky on it */
        top: 0;
        bottom: 0;
        max-height: 100%;
        /* clip overflow */
        overflow: hidden;
    }

    .fc-v-event:not(.fc-event-start) {
        border-top-width: 0;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .fc-v-event:not(.fc-event-end) {
        border-bottom-width: 0;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    .fc-v-event.fc-event-selected:before {
        /* expand hit area */
        left: -10px;
        right: -10px;
    }

    .fc-v-event {

        /* resizer (mouse AND touch) */

    }

    .fc-v-event .fc-event-resizer-start {
        cursor: n-resize;
    }

    .fc-v-event .fc-event-resizer-end {
        cursor: s-resize;
    }

    .fc-v-event {

        /* resizer for MOUSE */

    }

    .fc-v-event:not(.fc-event-selected) .fc-event-resizer {
        height: 8px;
        height: var(--fc-event-resizer-thickness, 8px);
        left: 0;
        right: 0;
    }

    .fc-v-event:not(.fc-event-selected) .fc-event-resizer-start {
        top: -4px;
        top: calc(var(--fc-event-resizer-thickness, 8px) / -2);
    }

    .fc-v-event:not(.fc-event-selected) .fc-event-resizer-end {
        bottom: -4px;
        bottom: calc(var(--fc-event-resizer-thickness, 8px) / -2);
    }

    .fc-v-event {

        /* resizer for TOUCH (when event is "selected") */

    }

    .fc-v-event.fc-event-selected .fc-event-resizer {
        left: 50%;
        margin-left: -4px;
        margin-left: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2);
    }

    .fc-v-event.fc-event-selected .fc-event-resizer-start {
        top: -4px;
        top: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2);
    }

    .fc-v-event.fc-event-selected .fc-event-resizer-end {
        bottom: -4px;
        bottom: calc(var(--fc-event-resizer-dot-total-width, 8px) / -2);
    }

    .fc .fc-timegrid .fc-daygrid-body {
        /* the all-day daygrid within the timegrid view */
        z-index: 2;
        /* put above the timegrid-body so that more-popover is above everything. TODO: better solution */
    }

    .fc .fc-timegrid-divider {
        padding: 0 0 2px;
        /* browsers get confused when you set height. use padding instead */
    }

    .fc .fc-timegrid-body {
        position: relative;
        z-index: 1;
        /* scope the z-indexes of slots and cols */
        min-height: 100%;
        /* fill height always, even when slat table doesn't grow */
    }

    .fc .fc-timegrid-axis-chunk {
        /* for advanced ScrollGrid */
        position: relative
            /* offset parent for now-indicator-container */

    }

    .fc .fc-timegrid-axis-chunk>table {
        position: relative;
        z-index: 1;
        /* above the now-indicator-container */
    }

    .fc .fc-timegrid-slots {
        position: relative;
        z-index: 1;
    }

    .fc .fc-timegrid-slot {
        /* a <td> */
        height: 1.5em;
        border-bottom: 0
            /* each cell owns its top border */
    }

    .fc .fc-timegrid-slot:empty:before {
        content: '\00a0';
        /* make sure there's at least an empty space to create height for height syncing */
    }

    .fc .fc-timegrid-slot-minor {
        border-top-style: dotted;
    }

    .fc .fc-timegrid-slot-label-cushion {
        display: inline-block;
        white-space: nowrap;
    }

    .fc .fc-timegrid-slot-label {
        vertical-align: middle;
        /* vertical align the slots */
    }

    .fc {


        /* slots AND axis cells (top-left corner of view including the "all-day" text) */

    }

    .fc .fc-timegrid-axis-cushion,
    .fc .fc-timegrid-slot-label-cushion {
        padding: 0 4px;
    }

    .fc {


        /* axis cells (top-left corner of view including the "all-day" text) */
        /* vertical align is more complicated, uses flexbox */

    }

    .fc .fc-timegrid-axis-frame-liquid {
        height: 100%;
        /* will need liquid-hack in FF */
    }

    .fc .fc-timegrid-axis-frame {
        overflow: hidden;
        display: flex;
        align-items: center;
        /* vertical align */
        justify-content: flex-end;
        /* horizontal align. matches text-align below */
    }

    .fc .fc-timegrid-axis-cushion {
        max-width: 60px;
        /* limits the width of the "all-day" text */
        flex-shrink: 0;
        /* allows text to expand how it normally would, regardless of constrained width */
    }

    .fc-direction-ltr .fc-timegrid-slot-label-frame {
        text-align: right;
    }

    .fc-direction-rtl .fc-timegrid-slot-label-frame {
        text-align: left;
    }

    .fc-liquid-hack .fc-timegrid-axis-frame-liquid {
        height: auto;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .fc .fc-timegrid-col.fc-day-today {
        background-color: rgba(255, 220, 40, 0.15);
        background-color: var(--fc-today-bg-color, rgba(255, 220, 40, 0.15));
    }

    .fc .fc-timegrid-col-frame {
        min-height: 100%;
        /* liquid-hack is below */
        position: relative;
    }

    .fc-media-screen.fc-liquid-hack .fc-timegrid-col-frame {
        height: auto;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .fc-media-screen .fc-timegrid-cols {
        position: absolute;
        /* no z-index. children will decide and go above slots */
        top: 0;
        left: 0;
        right: 0;
        bottom: 0
    }

    .fc-media-screen .fc-timegrid-cols>table {
        height: 100%;
    }

    .fc-media-screen .fc-timegrid-col-bg,
    .fc-media-screen .fc-timegrid-col-events,
    .fc-media-screen .fc-timegrid-now-indicator-container {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }

    .fc {

        /* bg */

    }

    .fc .fc-timegrid-col-bg {
        z-index: 2;
        /* TODO: kill */
    }

    .fc .fc-timegrid-col-bg .fc-non-business {
        z-index: 1
    }

    .fc .fc-timegrid-col-bg .fc-bg-event {
        z-index: 2
    }

    .fc .fc-timegrid-col-bg .fc-highlight {
        z-index: 3
    }

    .fc .fc-timegrid-bg-harness {
        position: absolute;
        /* top/bottom will be set by JS */
        left: 0;
        right: 0;
    }

    .fc {

        /* fg events */
        /* (the mirror segs are put into a separate container with same classname, */
        /* and they must be after the normal seg container to appear at a higher z-index) */

    }

    .fc .fc-timegrid-col-events {
        z-index: 3;
        /* child event segs have z-indexes that are scoped within this div */
    }

    .fc {

        /* now indicator */

    }

    .fc .fc-timegrid-now-indicator-container {
        bottom: 0;
        overflow: hidden;
        /* don't let overflow of lines/arrows cause unnecessary scrolling */
        /* z-index is set on the individual elements */
    }

    .fc-direction-ltr .fc-timegrid-col-events {
        margin: 0 2.5% 0 2px;
    }

    .fc-direction-rtl .fc-timegrid-col-events {
        margin: 0 2px 0 2.5%;
    }

    .fc-timegrid-event-harness {
        position: absolute
            /* top/left/right/bottom will all be set by JS */
    }

    .fc-timegrid-col {
        position: relative;
    }

    .fc-timegrid-event-harness>.fc-timegrid-event {
        position: absolute;
        /* absolute WITHIN the harness */
        top: 0;
        /* for when not yet positioned */
        bottom: 0;
        /* " */
        left: 0;
        right: 0;
    }

    .fc-timegrid-event-harness-inset .fc-timegrid-event,
    .fc-timegrid-event.fc-event-mirror,
    .fc-timegrid-more-link {
        box-shadow: 0px 0px 0px 1px #fff;
        box-shadow: 0px 0px 0px 1px var(--fc-page-bg-color, #fff);
    }

    .fc-timegrid-event,
    .fc-timegrid-more-link {
        /* events need to be root */
        font-size: .85em;
        font-size: var(--fc-small-font-size, .85em);
        border-radius: 3px;
    }

    .fc-timegrid-event {
        /* events need to be root */
        margin-bottom: 1px
            /* give some space from bottom */
    }

    .fc-timegrid-event .fc-event-main {
        padding: 1px 1px 0;
    }

    .fc-timegrid-event .fc-event-time {
        white-space: nowrap;
        font-size: .85em;
        font-size: var(--fc-small-font-size, .85em);
        margin-bottom: 1px;
    }

    .fc-timegrid-event-short .fc-event-main-frame {
        flex-direction: row;
        overflow: hidden;
    }

    .fc-timegrid-event-short .fc-event-time:after {
        content: '\00a0-\00a0';
        /* dash surrounded by non-breaking spaces */
    }

    .fc-timegrid-event-short .fc-event-title {
        font-size: .85em;
        font-size: var(--fc-small-font-size, .85em)
    }

    .fc-timegrid-more-link {
        /* does NOT inherit from fc-timegrid-event */
        position: absolute;
        z-index: 9999;
        /* hack */
        color: inherit;
        color: var(--fc-more-link-text-color, inherit);
        background: #d0d0d0;
        background: var(--fc-more-link-bg-color, #d0d0d0);
        cursor: pointer;
        margin-bottom: 1px;
        /* match space below fc-timegrid-event */
    }

    .fc-timegrid-more-link-inner {
        /* has fc-sticky */
        padding: 3px 2px;
        top: 0;
    }

    .fc-direction-ltr .fc-timegrid-more-link {
        right: 0;
    }

    .fc-direction-rtl .fc-timegrid-more-link {
        left: 0;
    }

    .fc {

        /* line */

    }

    .fc .fc-timegrid-now-indicator-line {
        position: absolute;
        z-index: 4;
        left: 0;
        right: 0;
        border-style: solid;
        border-color: red;
        border-color: var(--fc-now-indicator-color, red);
        border-width: 1px 0 0;
    }

    .fc {

        /* arrow */

    }

    .fc .fc-timegrid-now-indicator-arrow {
        position: absolute;
        z-index: 4;
        margin-top: -5px;
        /* vertically center on top coordinate */
        border-style: solid;
        border-color: red;
        border-color: var(--fc-now-indicator-color, red);
    }

    .fc-direction-ltr .fc-timegrid-now-indicator-arrow {
        left: 0;

        /* triangle pointing right. TODO: mixin */
        border-width: 5px 0 5px 6px;
        border-top-color: transparent;
        border-bottom-color: transparent;
    }

    .fc-direction-rtl .fc-timegrid-now-indicator-arrow {
        right: 0;

        /* triangle pointing left. TODO: mixin */
        border-width: 5px 6px 5px 0;
        border-top-color: transparent;
        border-bottom-color: transparent;
    }
</style>