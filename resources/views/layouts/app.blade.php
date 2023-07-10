<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Blogpost</title>
    @include('partials.head-links')
</head>
<body>
    <header>

    </header>
    <main>
        @yield('content')
    </main>
    @yield('footer')
    @include('partials.scripts')
</body>
</html>
