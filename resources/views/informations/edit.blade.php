<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Informasi') }}
        </h2>
    </x-slot>

    <div class="container py-12">
        <form action="{{ route('informations.update', $information->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ $information->judul }}" required>
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ $information->deskripsi }}</textarea>
            </div>

            <div class="mb-4">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
                @if($information->foto)
                    <img src="{{ asset('storage/' . $information->foto) }}" alt="{{ $information->judul }}" style="width: 100px; height: auto;"/>
                @endif
            </div>

            <div class="mb-4">
    <label for="kategori_id" class="form-label">Kategori</label>
    <select name="kategori_id" id="kategori_id" class="form-control" required>
        <option value="">Pilih Kategori</option>
        @foreach($kategoris as $kategori)
            <option value="{{ $kategori->id }}" {{ (isset($information) && $information->kategori_id == $kategori->id) ? 'selected' : '' }}>
                {{ $kategori->judul }}
            </option>
        @endforeach
    </select>
</div>


            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
</x-app-layout>
