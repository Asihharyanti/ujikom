<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Agenda') }}
        </h2>
    </x-slot>

    <div class="container py-12">
        <form action="{{ route('agendas.update', $agenda->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ $agenda->judul }}" required>
            </div>

            <div class="mb-4">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ $agenda->deskripsi }}</textarea>
            </div>

            <div class="mb-4">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $agenda->tanggal }}" required>
            </div>

            <div class="mb-4">
                <label for="kategori_id" class="form-label">Kategori</label>
                <select name="kategori_id" id="kategori_id" class="form-control" required>
                    <option value="">Pilih Kategori</option>
                    @foreach($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" {{ $agenda->kategori_id == $kategori->id ? 'selected' : '' }}>
                            {{ $kategori->judul }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
</x-app-layout>
