<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Blogpost Dashboard</title>
    @include('partials.head-links')
</head>

<body class="d-flex" style="min-height: 100vh;">
    <div class="row w-100 m-0 p-0 position-relative">
        @include('partials.dashboard.sidebar')
        <div class="col-10 ms-auto p-0">
            @include('partials.dashboard.header')
            <main class="continer-lg px-4">
                @yield('content')
            </main>
            <footer></footer>
        </div>
    </div>
    @include('partials.scripts')
</body>

</html>
