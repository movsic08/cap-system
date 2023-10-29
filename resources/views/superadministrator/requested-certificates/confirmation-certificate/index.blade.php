<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">Confirmation Certificate</h2>
    </header>

    <div class="relative overflow-x-auto rounded">
        <table class="w-full text-sm text-left text-slate-400">
            <thead class="text-xs  uppercase bg-green-700 text-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Confirmation Name
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
                @foreach ($requestedConfirmationCertificates as $requestedConfirmationCertificate)
                <tr class="bg-green-600 rounded text-white">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $requestedConfirmationCertificate->confirmation_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $requestedConfirmationCertificate->mothers_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $requestedConfirmationCertificate->fathers_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $requestedConfirmationCertificate->email }}
                    </td>
                    <td class="px-6 py-4 gap-2 flex items-center">
                        <form action="{{ route('approve-certificate-confirmation') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $requestedConfirmationCertificate->id }}">
                            <input class="hidden" type="checkbox" checked name="approve" disabled="disabled">
                            <input type="hidden" name="name"
                                value="{{ $requestedConfirmationCertificate->first_name }}">
                            <input type="hidden" name="email" value="{{ $requestedConfirmationCertificate->email }}">
                            <button class="px-3 py-1.5 hover:bg-indigo-800 bg-indigo-700 rounded text-white">
                                Approve
                            </button>
                        </form>
                        <form action="{{ route('reject-certificate-confirmation') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $requestedConfirmationCertificate->id }}">
                            <input class="hidden" type="checkbox" checked name="reject" disabled="disabled">
                            <input type="hidden" name="name"
                                value="{{ $requestedConfirmationCertificate->first_name }}">
                            <input type="hidden" name="email" value="{{ $requestedConfirmationCertificate->email }}">
                            <button class="px-3 py-1.5 hover:bg-red-800 bg-red-700 rounded text-white">
                                Reject
                            </button>
                        </form>
                        <a href="{{ route('requested-confirmation-certificate.show', $requestedConfirmationCertificate->id) }}"
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
        {{ $requestedConfirmationCertificates->links() }}
    </div>

</x-app-layout>