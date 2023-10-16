<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">Marriage Certificate</h2>
    </header>

    <div class="relative overflow-x-auto rounded">
        <table class="w-full text-sm text-left text-slate-400">
            <thead class="text-xs  uppercase bg-green-700 text-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Grrom's Name
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Bride's Name
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Marriage Date
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Email Address
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requestedMarriageCertificates as $requestedMarriageCertificate)
                <tr class="bg-green-600 rounded text-white">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $requestedMarriageCertificate->grooms_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $requestedMarriageCertificate->brides_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{
                        \Carbon\Carbon::parse($requestedMarriageCertificate->marriage_date)->isoFormat('MMM
                        D
                        YYYY')
                        }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $requestedMarriageCertificate->email }}
                    </td>
                    <td class="px-6 py-4 gap-2 flex items-center">
                        <a href="{{ route('requested-marriage-certificate.show', $requestedMarriageCertificate->id) }}"
                            class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                            More
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $requestedMarriageCertificates->links() }}
    </div>

</x-app-layout>