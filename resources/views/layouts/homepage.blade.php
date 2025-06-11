<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'iFlexs - Sewa iPhone Tanpa Harus Memiliki')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    @include('layouts.partials.styles')
</head>
<body>
    @if(!request()->routeIs('product', 'detailproduct', 'pesan', 'profile.show', 'profile.edit'))
    <!-- Background Effects -->
    <div class="glow-effect glow-1"></div>
    <div class="glow-effect glow-2"></div>
    @endif

    @include('layouts.partials.navbar')

    @yield('content')

    @include('layouts.partials.footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    @include('layouts.partials.scripts')
</body>
</html>