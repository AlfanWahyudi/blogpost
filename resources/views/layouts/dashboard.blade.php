<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Blogpost Dashboard</title>
    @include('partials.head-links')
</head>

<body class="d-flex flex-column justify-content-center" style="min-height: 100vh;">
    <main class="container d-flex flex-column align-items-center my-4">
        @yield('content')
    </main>
    @include('partials.scripts')
</body>

</html>
