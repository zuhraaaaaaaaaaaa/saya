@extends('layouts.app')

@section('content')
    <img src="{{ asset('storage/post/' . $post->foto) }}" alt="foto" class="w-100px rounded">
    <p><strong>{{ $post->judul }}</strong></p>
    <p>{!! $post->konten !!}</p>
@endsection
