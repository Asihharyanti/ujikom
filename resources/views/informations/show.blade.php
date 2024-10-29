@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold">{{ $informasi->title }}</h1> <!-- Mengubah 'judul' menjadi 'title' -->
    <p class="mt-4">{{ $informasi->content }}</p> <!-- Mengubah 'deskripsi' menjadi 'content' -->
    <a href="{{ route('informations.index') }}" class="btn btn-secondary mt-4">Kembali</a> <!-- Menggunakan route yang benar -->
</div>
@endsection
