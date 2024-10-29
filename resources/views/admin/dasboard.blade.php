<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex">
        {{-- Sidebar --}}
        <div class="w-1/4 bg-gray-800 h-screen">
            <div class="text-white p-6">
                {{-- Logo atau Judul --}}
                <div class="mb-6 text-center">
                    <h1 class="text-2xl font-bold">APLIKASI CAT</h1>
                </div>

                {{-- Informasi Pengguna --}}
                <div class="flex items-center mb-6">
                    <img class="w-10 h-10 rounded-full mr-4" src="path-to-avatar.png" alt="Avatar Pengguna">
                    <div>
                        <p class="text-sm font-semibold">ADMINISTRATOR</p>
                        <p class="text-xs text-green-400">Online</p>
                    </div>
                </div>

                {{-- Navigasi Sidebar --}}
                <nav>
                    <ul>
                        <li class="mb-4">
                            <a href="#" class="block text-white hover:bg-gray-700 p-2 rounded">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="block text-white hover:bg-gray-700 p-2 rounded">
                                <i class="fas fa-info-circle"></i> Informasi
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="block text-white hover:bg-gray-700 p-2 rounded">
                                <i class="fas fa-calendar-alt"></i> Agenda
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="block text-white hover:bg-gray-700 p-2 rounded">
                                <i class="fas fa-images"></i> Galeri
                            </a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="block text-white hover:bg-gray-700 p-2 rounded">
                                <i class="fas fa-images"></i> Kategori
                            </a>
                        </li>
                        {{-- Tambahkan item navigasi lainnya jika diperlukan --}}
                    </ul>
                </nav>
            </div>
        </div>

        {{-- Area Konten Utama --}}
        <div class="w-3/4">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
                        {{-- Kartu Dashboard --}}
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                            <!-- Kartu Admin -->
                            <div class="bg-blue-500 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
                                <div>
                                    <h3 class="text-2xl">2</h3>
                                    <p>Dashboard</p>
                                </div>
                                <i class="fas fa-user fa-2x"></i> <!-- Ikon -->
                            </div>

                            <!-- Kartu Member -->
                            <div class="bg-green-500 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
                                <div>
                                    <h3 class="text-2xl">3</h3>
                                    <p>Informasi</p>
                                </div>
                                <i class="fas fa-map-marker-alt fa-2x"></i> <!-- Ikon -->
                            </div>

                            <!-- Kartu Soal -->
                            <div class="bg-orange-500 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
                                <div>
                                    <h3 class="text-2xl">2</h3>
                                    <p>Agenda</p>
                                </div>
                                <i class="fas fa-folder fa-2x"></i> <!-- Ikon -->
                            </div>

                            <!-- Kartu Jawaban -->
                            <div class="bg-red-500 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
                                <div>
                                    <h3 class="text-2xl">2</h3>
                                    <p>Galeri</p>
                                </div>
                                <i class="fas fa-clipboard fa-2x"></i> <!-- Ikon -->
                            </div>
                        </div>

                        {{-- Tabel Member Terbaru --}}
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold mb-4">Member Terbaru</h3>
                                <table class="table-auto w-full">
                                    <thead>
                                        <tr class="bg-gray-200">
                                            <th class="px-4 py-2">No</th>
                                            <th class="px-4 py-2">Nama</th>
                                            <th class="px-4 py-2">Username</th>
                                            <th class="px-4 py-2">Password</th>
                                            <th class="px-4 py-2">Email</th>
                                            <th class="px-4 py-2">Jenis Kelamin</th>
                                            <th class="px-4 py-2">Telp</th>
                                            <th class="px-4 py-2">Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border px-4 py-2">1</td>
                                            <td class="border px-4 py-2">ROHMAN</td>
                                            <td class="border px-4 py-2">rohman</td>
                                            <td class="border px-4 py-2">rohman</td>
                                            <td class="border px-4 py-2">rohman@gmail.com</td>
                                            <td class="border px-4 py-2">Pria</td>
                                            <td class="border px-4 py-2">081212341234</td>
                                            <td class="border px-4 py-2">Jl. Terubuk blok h no.35</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">2</td>
                                            <td class="border px-4 py-2">SRI WAHYUNI</td>
                                            <td class="border px-4 py-2">sri</td>
                                            <td class="border px-4 py-2">sri</td>
                                            <td class="border px-4 py-2">SRI@GMAIL.COM</td>
                                            <td class="border px-4 py-2">Wanita</td>
                                            <td class="border px-4 py-2">081212341234</td>
                                            <td class="border px-4 py-2">Jl. Bina Krida no.12</td>
                                        </tr>
                                        <tr>
                                            <td class="border px-4 py-2">3</td>
                                            <td class="border px-4 py-2">DONI</td>
                                            <td class="border px-4 py-2">doni</td>
                                            <td class="border px-4 py-2">doni</td>
                                            <td class="border px-4 py-2">doni34@gmail.com</td>
                                            <td class="border px-4 py-2">Pria</td>
                                            <td class="border px-4 py-2">081212341234</td>
                                            <td class="border px-4 py-2">Jl. Bina Krida no.12</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
