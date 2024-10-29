<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Informasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($errors->any())
                        <div class="bg-red-500 text-white p-4 rounded mb-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('informasi.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700">Judul</label>
                            <input type="text" name="title" class="border rounded w-full py-2 px-3" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Isi</label>
                            <textarea name="content" class="border rounded w-full py-2 px-3" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Status</label>
                            <input type="text" name="status" class="border rounded w-full py-2 px-3" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Kategori</label>
                            <input type="text" name="category" class="border rounded w-full py-2 px-3" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Harga</label>
                            <input type="number" name="price" class="border rounded w-full py-2 px-3" required>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Simpan</button>
                        <a href="{{ route('informasi.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded">Kembali</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
