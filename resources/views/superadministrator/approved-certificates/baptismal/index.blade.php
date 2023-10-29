<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">Baptismal Certificate</h2>
    </header>

    <div class="relative overflow-x-auto rounded">
        <table class="w-full text-sm text-left text-slate-400">
            <thead class="text-xs  uppercase bg-green-700 text-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Child's Name
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Mother's Name
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Father's Name
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
                @foreach ($approvedBaptismalCertificates as $approvedBaptismalCertificate)
                <tr class="bg-green-600 rounded text-white">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $approvedBaptismalCertificate->childs_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $approvedBaptismalCertificate->mothers_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $approvedBaptismalCertificate->fathers_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $approvedBaptismalCertificate->email }}
                    </td>
                    <td class="px-6 py-4 gap-2 flex items-center">
                        <a href="{{ route('requested-baptismal-certificate.show', $approvedBaptismalCertificate->id) }}"
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
        {{ $approvedBaptismalCertificates->links() }}
    </div>

</x-app-layout>