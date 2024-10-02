<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Galeri') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Galeri Foto</h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @if($images->isEmpty())
                            <p>Tidak ada gambar untuk ditampilkan.</p>
                        @else
                            @foreach($images as $image)
                                <div class="border rounded-lg overflow-hidden shadow-md">
                                    <img src="{{ asset('images/' . $image->filename) }}" alt="{{ $image->description }}" class="w-full h-48 object-cover">
                                    <div class="p-4">
                                        <p class="text-gray-700">{{ $image->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
