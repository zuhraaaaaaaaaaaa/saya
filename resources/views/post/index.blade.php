@extends('layouts.app')

@section('content')
    <a href="{{ route('posts.create') }}" class="btn btn-outline-success mb-3">Tambah post</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Judul</th>
                <th scope="col">Konten</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <th scope="row">1</th>
                    <td><img src="{{ asset('/storage/post/' . $post->foto) }}" alt="foto" width="50px"></td>
                    <td>{{ $post->judul }}</td>
                    <td>{{ $post->konten }}</td>
                    <td>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                             onsubmit="retrun confirm('Apakah Anda Ingin Menghapus Data Ini?')">

                            <a href=""class="btn btn-outline-primary">Edit</a>
                            <a href="{{ route('posts.show', $post->id) }}"class="btn btn-outline-secondary">Lihat</a>
                            @csrf
                            @method('Delete')
                            <button type="submit" class="btn btn-outline-denger">delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <div class="alert alert-danger" role="alert">
                    Data Belum Tersedia!
                </div>
            @endforelse
            
        </tbody>
    </table>
@endsection
