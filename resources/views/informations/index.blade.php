<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Informasi') }}
        </h2>
    </x-slot>

    <div class="container py-12">
        <h1>Daftar Informasi</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('informations.create') }}" class="btn btn-primary">Tambah Informasi</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Foto</th> <!-- Menambahkan kolom foto -->
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($informations as $information)
                    <tr>
                        <td>{{ $information->judul }}</td>
                        <td>{{ $information->deskripsi }}</td> <!-- Pastikan ini 'deskripsi' -->
                        <td>
                            @if($information->foto)
                                <img src="{{ asset('storage/' . $information->foto) }}" alt="{{ $information->judul }}" style="width: 100px; height: auto;"/> <!-- Menampilkan foto -->
                            @else
                                Tidak ada foto
                            @endif
                        </td>
                        <td>{{ $information->kategori->judul ?? 'Tidak ada' }}</td> <!-- Menampilkan nama kategori -->
                        <td>
                            <a href="{{ route('informations.edit', $information->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('informations.destroy', $information->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
