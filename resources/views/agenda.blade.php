<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agenda') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Agenda Kegiatan</h3>

                    <!-- Tabel Agenda -->
                    <table class="table-auto w-full">
                        <thead>
                            <tr class="bg-gray-300">
                                <th class="px-4 py-2">No</th>
                                <th class="px-4 py-2">Nama Kegiatan</th>
                                <th class="px-4 py-2">Tanggal</th>
                                <th class="px-4 py-2">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border px-4 py-2">1</td>
                                <td class="border px-4 py-2">Rapat Koordinasi</td>
                                <td class="border px-4 py-2">12 Oktober 2024</td>
                                <td class="border px-4 py-2">Rapat koordinasi untuk membahas rencana kerja bulan depan.</td>
                            </tr>
                            <tr>
                                <td class="border px-4 py-2">2</td>
                                <td class="border px-4 py-2">Workshop Teknologi</td>
                                <td class="border px-4 py-2">20 Oktober 2024</td>
                                <td class="border px-4 py-2">Workshop mengenai penerapan teknologi dalam pendidikan.</td>
                            </tr>
                            <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
