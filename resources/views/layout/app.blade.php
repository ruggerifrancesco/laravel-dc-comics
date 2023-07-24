<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel App')</title>
    <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/x-icon">

    @vite('resources/js/app.js')
</head>
<body>
    @include('guest.partials.header')

    <main>
        @yield('main-content')
    </main>

    @include('guest.partials.footer')
</body>
</html>
