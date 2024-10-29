<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Kategori') }}
        </h2>
    </x-slot>

    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Daftar Kategori</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('kategoris.create') }}" class="btn btn-primary mb-4">Tambah Kategori</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kategoris as $kategori)
                    <tr>
                        <td>{{ $kategori->judul }}</td>
                        <td>{{ $kategori->deskripsi }}</td>
                        <td>
                            <a href="{{ route('kategoris.edit', $kategori->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kategoris.destroy', $kategori->id) }}" method="POST" style="display:inline;">
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
