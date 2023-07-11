<header class="shadow-sm">
    <div class="container py-2">
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <a href={{ route('home') }} class="navbar-brand fw-medium">Blogpost</a>
                <div id="offcanvasNavbar" class="offcanvas offcanvas-end" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Blogpost</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                            <li class="nav-item">
                                <a class="nav-link pe-0" href="#">Sign In</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            </div>
        </nav>
    </div>
</header>
