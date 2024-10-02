{{-- resources/views/informations/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Informasi</h1>
    <form action="{{ route('informations.update', $information->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ $information->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Konten</label>
            <textarea name="content" class="form-control" required>{{ $information->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
