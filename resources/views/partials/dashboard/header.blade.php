<header class="d-flex justify-content-end py-3 px-4 mb-4 shadow-sm">
    <div class="dropdown py-1">
        <button class="btn btn-link text-decoration-none dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            {{  ucfirst(auth()->user()->name) }}
        </button>
        <ul class="dropdown-menu">
            <li>
                <a href="#" class="dropdown-item">Profile</a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <a href="{{ route('home') }}" class="dropdown-item">Back to blogpost</a>
            </li>
            <li><hr class="dropdown-divider"></li>
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
</header>
