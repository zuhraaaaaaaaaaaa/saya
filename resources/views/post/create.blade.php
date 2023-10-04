@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">file</label>
            <input class="form-control" type="file" name="foto" id="formFile">
            @error('foto')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">judul</label>
            <input type="text" name="judul" class="form-control" id="exampleInputPassword1">
            @error('judul')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <label for="floatingTextarea">konten</label>
        <div class="form-floating">
            <textarea class="form-control" name="konten" placeholder="masukan konten" id="floatingTextarea"></textarea>
            @error('konten')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror

        </div>
        <div class="mb-3 form-check">

        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
@endsection
