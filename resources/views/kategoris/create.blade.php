<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Tambah Kategori') }}
        </h2>
    </x-slot>

    <div class="container">
        <h1>Tambah Kategori</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('kategoris.store') }}" method="POST" enctype="multipart/form-data"> <!-- Tambahkan enctype untuk upload file -->
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul </label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Isi </label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required></textarea>
            </div>
            <div class="mb-4">
                <label for="kategori_id" class="form-label">Kategori</label>
                <select name="kategori_id" id="kategori_id" class="form-control" required>
                    <option value="">Pilih Kategori</option>
                    @foreach($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->judul }}</option>
                    @endforeach
                </select>
            </div>
           
    
            <button type="submit" class="btn btn-primary">Simpan Kategori</button>
            <a href="{{ route('kategoris.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</x-app-layout>
