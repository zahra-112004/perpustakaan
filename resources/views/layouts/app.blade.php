<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            @yield('background');
        }
    </style>
</head>

<body>
    
        @if (Request::is('books*'))
            @include('partials.navbar')
        @endif

    <main class="py-4">
        @yield('content')
    </main>
</body>

</html>
