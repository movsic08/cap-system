<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">Donations</h2>
        @include('superadministrator.donations.create')
    </header>

    <div class="relative overflow-x-auto rounded">
        <table class="w-full text-sm text-left text-slate-400">
            <thead class="text-xs  uppercase bg-green-700 text-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3 rounded-l-lg">
                        Donor name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Donation Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Donor Address
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Donor Contact #
                    </th>
                    <th scope="col" class="px-6 py-3 rounded-r-lg">
                        Amount
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donations as $donation)
                <tr class="bg-green-600 rounded text-white">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $donation->donor_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ \Carbon\Carbon::parse($donation->donation_date)->isoFormat('MMM D YYYY')}}
                    </td>
                    <td class="px-6 py-4">
                        {{ $donation->address }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $donation->contact_number }}
                    </td>
                    <td class="px-6 py-4">
                        ₱{{ $donation->amount }}
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="font-semibold text-gray-900 dark:text-white bg-green-500">
                    <th scope="row" class="px-6 py-3 text-base">Total</th>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3"></td>
                    <td class="px-6 py-3">₱{{ $donation_total }}</td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="mt-4">
        {{ $donations->links() }}
    </div>


</x-app-layout>