<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <title>{{ $title ?? 'HALAMAN HOME' }}</title>
</head>

<body>
    @include('layouts.navbar')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4"> MENU {{ $title ?? 'This Is A New Page' }}</h3>
                    <p class="text-center my-4">{{ $name ?? 'My Creadit' }}</p>
                </div>
                <div class="card-border-6 shadow-5m rounded">
                    <div class="card-body">
                        @yield('content')
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'data berhasil di input');
        @elseif(session()->has('eror'))
        toastr.error('{{ session ('error') }}', 'data gagal di input');
        @endif
    </script>

</body>

</html>
