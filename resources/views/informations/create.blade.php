{{-- resources/views/informations/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Informasi</h1>
    <form action="{{ route('informations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content">Konten</label>
            <textarea name="content" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
