<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Informasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('informasi.update', $information->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label class="block text-gray-700">Judul</label>
                            <input type="text" name="title" value="{{ $information->title }}" class="border rounded w-full py-2 px-3" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700">Isi</label>
                            <textarea name="content" class="border rounded w-full py-2 px-3" required>{{ $information->content }}</textarea>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update</button>
                        <a href="{{ route('informasi.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
