<x-app-layout>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left  text-gray-400">
            <div
                class="p-5 text-lg flex items-center justify-between  font-semibold text-left  text-white bg-green-600">
                <div>
                    Members
                    <p class="mt-1 text-sm font-normal  text-gray-200">
                        List of church members
                    </p>
                </div>
                <a href="{{ route('member.create') }}"
                    class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center ">
                    Add Member
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                    </svg>
                </a>
            </div>
            <thead class="text-xs uppercase  bg-green-800 text-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Age
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gender
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date of Birth
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">More</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member )
                <tr class="bg-green-600">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
                        {{ $member->member_id }}
                    </th>
                    <td class="px-6 py-4 text-white">
                        {{ $member->name }}
                    </td>
                    <td class="px-6 py-4 text-white">
                        {{ \Carbon\Carbon::parse($member->date_of_birth)->age }}
                    </td>
                    <td class="px-6 py-4 text-white">
                        {{ $member->gender }}
                    </td>
                    <td class="px-6 py-4 text-white">
                        {{ \Carbon\Carbon::parse($member->date_of_birth)->isoFormat('MMM D YYYY')}}
                    </td>
                    <td class="px-6 flex gap-2 items-center py-4 ">
                        <a href="{{ route('member.edit', $member) }}"
                            class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                            Edit
                        </a>
                        @include('superadministrator.members.delete')
                    </td>
                    <td class="px-6 py-4 text-white">
                        <a class="text-sky-100 underline" href="{{ route('member.show', $member) }}">More Details</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $members->links() }}
    </div>
</x-app-layout>
