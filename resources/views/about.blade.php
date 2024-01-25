@extends('layouts.main')

@section('container')
    <p>Halaman About</p>
    <h2>{{ $name }}</h2>
    <p>{{ $region }}</p>
    <img src="img/{{ $image }}" width="200" alt="{{ $name }}" class="img-thumbnail rounded-circle">
@endsection
