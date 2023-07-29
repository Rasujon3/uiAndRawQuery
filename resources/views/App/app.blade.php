<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('keyTitle')</title>
    <link rel="stylesheet" href="{{ asset('CSS/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
</head>

<body>
    @include('App.navbar')

    @yield('MainContent')
    @include('App.footer')

    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('JS/custom.js') }}"></script>
</body>

</html>
