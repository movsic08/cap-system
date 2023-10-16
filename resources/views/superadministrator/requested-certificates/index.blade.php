<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">Requested Certificates</h2>
    </header>
    <div class="grid grid-cols-12 gap-2">
        <div
            class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
            <a href="{{ route('requested-baptismal-certificate.index') }}" class="px-5 py-5">
                <h2 class="text-lg font-semibold text-slate-800 mb-2">Baptismal Certificate</h2>
                <div class="flex items-start">
                    <div class="text-3xl font-bold text-slate-800 mr-2">{{ $baptismalCertificateCount }}</div>
                </div>
            </a>
        </div>
        <div
            class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
            <a href="{{ route('requested-marriage-certificate.index') }}" class="px-5 py-5">
                <h2 class="text-lg font-semibold text-slate-800 mb-2">Marriage Certificate</h2>
                <div class="flex items-start">
                    <div class="text-3xl font-bold text-slate-800 mr-2">{{ $marriageCertificateCount }}</div>
                </div>
            </a>
        </div>
        <div
            class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
            <a href="" class="px-5 py-5">
                <h2 class="text-lg font-semibold text-slate-800 mb-2">Death Certificate</h2>
                <div class="flex items-start">
                    <div class="text-3xl font-bold text-slate-800 mr-2">{{ $deathCertificateCount }}</div>
                </div>
            </a>
        </div>
        <div
            class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
            <a href="" class="px-5 py-5">
                <h2 class="text-lg font-semibold text-slate-800 mb-2">Confirmation Certificate</h2>
                <div class="flex items-start">
                    <div class="text-3xl font-bold text-slate-800 mr-2">{{ $confirmationCertificateCount }}</div>
                </div>
            </a>
        </div>
    </div>
</x-app-layout>