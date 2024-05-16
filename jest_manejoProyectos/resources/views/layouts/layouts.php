<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="layoutSidenav">
        @yield('content')
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
