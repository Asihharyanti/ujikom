{{-- resources/views/informations/index.blade.php --}}
<x-app-layout>
@section('content')
<div class="container">
    <h1>Informasi</h1>
    <a href="{{ route('informations.create') }}" class="btn btn-primary">Tambah Informasi</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Konten</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($informations as $information)
                <tr>
                    <td>{{ $information->title }}</td>
                    <td>{{ $information->content }}</td>
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
