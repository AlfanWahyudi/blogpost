<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Blogpost</title>
    @include('partials.head-links')
</head>
<body class="d-flex flex-column" style="height: 100vh;">
    @include('partials.header')
    <main class="container px-4 mt-5 flex-grow-1">
        @yield('content')
    </main>
    @yield('footer')
    @include('partials.scripts')
</body>
</html>
