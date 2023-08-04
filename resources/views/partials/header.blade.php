<header class="shadow-sm">
    <div class="container py-2">
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <a href={{ route('home') }} class="navbar-brand fw-medium">Blogpost</a>
                <div id="offcanvasNavbar" class="offcanvas offcanvas-end" tabindex="-1"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Blogpost</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href={{ route('home') }}>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link pe-0" href={{ route('signin') }}>Sign In</a>
                                </li>
                            @endguest
                            @auth
                                <div class="nav-item dropdown dropdown">
                                    <a class="nav-link dropdown-toggle pe-0" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{  ucfirst(auth()->user()->name) }}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#" class="dropdown-item">Profile</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('dashboard.home') }}" class="dropdown-item">Dashboard</a>
                                        </li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-link text-dark text-start text-decoration-none px-3 py-1 w-100">
                                                    Sign out
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @endauth
                        </ul>
                    </div>
                </div>
                <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
</header>
