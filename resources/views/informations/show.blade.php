{{-- resources/views/informations/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $information->title }}</h1>
    <p>{{ $information->content }}</p>
    <a href="{{ route('informations.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
