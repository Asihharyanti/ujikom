<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex">
        {{-- Sidebar --}}
        <div class="w-1/4 bg-blue-800 h-screen">
            <div class="text-white p-6">
                {{-- Logo atau Judul --}}
                <div class="mb-6 text-center">
                    <h1 class="text-2xl font-bold">WEBSITE GALERI</h1>
                </div>

                {{-- Navigasi Sidebar --}}
                <nav>
    <ul>
        <li class="mb-4">
            <a href="/dashboard" onclick="showSection('dashboard')" class="block text-white hover:bg-blue-700 p-2 rounded">
                <i class="fas fa-user-shield"></i> Dashboard
            </a>
        </li>
        <li class="mb-4">
    <a href="{{ route('informations.index') }}" class="block text-white hover:bg-blue-700 p-2 rounded">
        <i class="fas fa-info-circle"></i> Informasi
    </a>
</li>

        <li class="mb-4">
        <a href="{{ route('agenda.index') }}" class="block text-white hover:bg-blue-700 p-2 rounded">
                <i class="fas fa-info-circle"></i> Agenda
            </a>
        </li>
        <li class="mb-4">
            <a href="/galeri" onclick="showSection('galeri')" class="block text-white hover:bg-blue-700 p-2 rounded">
                <i class="fas fa-images"></i> Galeri
            </a>
        </li>
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
                            <!-- Dashboard -->
                            <div
                                class="bg-blue-500 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
                                <div>
                                    <h3 class="text-2xl"></h3>
                                    <p>Dashboard</p>
                                </div>
                                <i class="fas fa-user fa-2x"></i> <!-- Ikon -->
                            </div>

                            <!-- Kartu Informasi -->
                            <div
                                class="bg-green-500 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
                                <div>
                                    <h3 class="text-2xl"></h3>
                                    <p>Informasi</p>
                                </div>
                                <i class="fas fa-info fa-2x"></i> <!-- Ikon -->
                            </div>

                            <!-- Kartu Agenda -->
                            <div
                                class="bg-orange-500 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
                                <div>
                                    <h3 class="text-2xl"></h3>
                                    <p>Agenda</p>
                                </div>
                                <i class="fas fa-calendar fa-2x"></i> <!-- Ikon -->
                            </div>

                            <!-- Kartu Galeri -->
                            <div
                                class="bg-red-500 text-white p-4 rounded-lg shadow-md flex items-center justify-between">
                                <div>
                                    <h3 class="text-2xl"></h3>
                                    <p>Galeri</p>
                                </div>
                                <i class="fas fa-images fa-2x"></i> <!-- Ikon -->
                            </div>
                        </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>