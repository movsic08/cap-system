<x-landing-page-layout>
    <form action="{{ route('baptismal-schedule-form.store') }}" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b bg-green-700 p-6 rounded-lg border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-white">Baptismal Schedule Form</h2>
                <p class="mb-1 text-sm leading-6 text-gray-50">Use a permanent address where you can receive mail.</p>
                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="first_name" class="block text-sm font-medium leading-6 text-gray-200">
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
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-200">
                            Email Address
                        </label>
                        <div class="mt-2">
                            <input type="text" name="email" id="email" value="{{ old('email', Auth::user()->email) }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="childs_name" class="block text-sm font-medium leading-6 text-gray-200">
                            Child's name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="childs_name" id="childs_name" value="{{ old('childs_name') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('childs_name')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="address" class="block text-sm font-medium leading-6 text-gray-200">
                            Address
                        </label>
                        <div class="mt-2">
                            <input type="text" name="address" id="address" value="{{ old('address') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('address')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="desired_start_date_time" class="block text-sm font-medium leading-6 text-gray-200">
                            Desired Start Date & Time
                        </label>
                        <div class="mt-2">
                            <input type="datetime-local" name="desired_start_date_time" id="desired_start_date_time"
                                value="{{ old('desired_start_date_time') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('desired_start_date_time')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="desired_end_date_time" class="block text-sm font-medium leading-6 text-gray-200">
                            Desired End Date & Time
                        </label>
                        <div class="mt-2">
                            <input type="datetime-local" name="desired_end_date_time" id="desired_end_date_time"
                                value="{{ old('desired_end_date_time') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('desired_end_date_time')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="mothers_name" class="block text-sm font-medium leading-6 text-gray-200">
                            Mother's Name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="mothers_name" id="mothers_name" value="{{ old('mothers_name') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('mothers_name')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="mothers_contact_number" class="block text-sm font-medium leading-6 text-gray-200">
                            Mother's Contact Number
                        </label>
                        <div class="mt-2">
                            <input type="number" name="mothers_contact_number" id="mothers_contact_number"
                                value="{{ old('mothers_contact_number') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('mothers_contact_number')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="fathers_name" class="block text-sm font-medium leading-6 text-gray-200">
                            Father's Name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="fathers_name" id="fathers_name" value="{{ old('fathers_name') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('fathers_name')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="fathers_contact_number" class="block text-sm font-medium leading-6 text-gray-200">
                            Fathers's Contact Number
                        </label>
                        <div class="mt-2">
                            <input type="number" name="fathers_contact_number" id="fathers_contact_number"
                                value="{{ old('fathers_contact_number') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('fathers_contact_number')" />
                        </div>
                    </div>


                    <div class="sm:col-span-3 ">
                        <label for="childs_birthdate" class="block text-sm font-medium leading-6 text-gray-200">
                            Child's Birthday
                        </label>
                        <div class="mt-2">
                            <input type="date" name="childs_birthdate" id="childs_birthdate"
                                value="{{ old('childs_birthdate') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('childs_birthdate')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="godfather" class="block text-sm font-medium leading-6 text-gray-200">
                            Godfather (separate with comma)
                        </label>
                        <div class="mt-2">
                            <input type="text" name="godfather" id="godfather" value="{{ old('godfather') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('godfather')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="godmother" class="block text-sm font-medium leading-6 text-gray-200">
                            Godmother (separate with comma)
                        </label>
                        <div class="mt-2">
                            <input type="text" name="godmother" id="godmother" value="{{ old('godmother') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('godmother')" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="parish_priest" class="block text-sm font-medium leading-6 text-gray-200">
                            Parish Priest
                        </label>
                        <div class="mt-2">
                            <input type="text" name="parish_priest" id="parish_priest"
                                value="{{ old('parish_priest') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('parish_priest')" />
                        </div>
                    </div>
                    {{-- --}}
                </div>

                <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <div class="sm:col-span-6">
                        <label for="sponsors" class="block text-sm font-medium leading-6 text-gray-200">
                            Sponsors (separate with comma)
                        </label>
                        <div class="mt-2">
                            <input type="text" name="sponsors" id="sponsors" value=" {{ old('sponsors') }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-input-error class="mt-2" :messages="$errors->get('sponsors')" />
                        </div>
                    </div>
                </div>

                <div class="mt-4 sm:col-span-6">
                    <label for="message" class="block text-sm font-medium leading-6 text-gray-200">
                        Message <span class="text-xs">(optional)</span>
                    </label>
                    <textarea id="message" name="message" rows="3"
                        class="block mt-2 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('message') }}</textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('message')" />
                </div>


                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="{{ route('member.index') }}" type="button"
                        class="text-base font-semibold leading-6 text-white">Cancel</a>

                    <button type="button" x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-form')"
                        class="rounded-md bg-indigo-600 px-6 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Continue
                    </button>
                    @include('landingpage.schedule-events.baptism.finalize-baptism-form')
                </div>
            </div>
        </div>
    </form>


    <div class="bg-green-700 mt-4 rounded p-4" id="calendar"></div>


    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                height: 720,
                initialView: 'timeGridWeek',
                slotMinTime: '8:00:00',
                slotMaxTime: '19:00:00',
                events: @json($events),
            });
            calendar.render();
        });


        // Get references to the input fields and display elements
        const inputs = [
            document.getElementById("first_name"),
            document.getElementById("email"),
            document.getElementById("childs_name"),
            document.getElementById("address"),
            document.getElementById("desired_start_date_time"),
            document.getElementById("desired_end_date_time"),
            document.getElementById("mothers_name"),
            document.getElementById("mothers_contact_number"),
            document.getElementById("fathers_name"),
            document.getElementById("fathers_contact_number"),
            document.getElementById("childs_birthdate"),
            document.getElementById("godfather"),
            document.getElementById("godmother"),
            document.getElementById("parish_priest"),
            document.getElementById("sponsors"),
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
            document.getElementById("display9"),
            document.getElementById("display10"),
            document.getElementById("display11"),
            document.getElementById("display12"),
            document.getElementById("display13"),
            document.getElementById("display14"),
            document.getElementById("display15"),
            document.getElementById("display16"),
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