@extends('layouts.app')

@section('content') <!-- Memulai section -->
<div class="container">
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
                <th>Isi Info</th>
                <th>Status</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($informations as $information)
                <tr>
                    <td>{{ $information->title }}</td>
                    <td>{{ $information->content }}</td>
                    <td>{{ $information->status }}</td>
                    <td>{{ $information->category }}</td>
                    <td>{{ $information->price }}</td>
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
@endsection <!-- Mengakhiri section -->
