@extends('layout')
@section('container')

    <h2>{{ $writers['nama'] }}</h2>
    <h2>{{ $writers['contact'] }}</h2>
    <h2>{{ $writers['negara'] }}</h2>
    <h2>{{ $writers['deskripsi'] }}</h2>
    <img class="w-25 " src="/image/{{ $writers['image'] }}" alt="">

@endsection
