<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') · SecMujer</title>

    <link rel="icon" type="image/png" href="{{ asset('img/linea_purpura.png') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/styleQualityManagement.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('base.header')

    <div class="container">
        @yield('content')
    </div>

    @include('base.footer') 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('script')
</body>
</html>