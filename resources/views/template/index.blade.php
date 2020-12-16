<!doctype html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
        <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <title>{{ $title ?? '' }}</title>
    </head>
    <body>
    @yield('content')

    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    @yield('additional-script')
    </body>
</html>
