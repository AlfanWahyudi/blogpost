<aside class="col-2 bg-dark fixed-top h-100">
    <nav class="navbar pt-3">
        <a href="{{ route('dashboard.home') }}" class="navbar-brand w-100 m-0 pb-4 text-center text-white fw-medium">APP NAME</a>
        <ul class="navbar-nav px-2 gap-2 w-100">
            <li class="nav-item">
                <a href="{{ route('dashboard.home') }}" class="nav-link active text-light" aria-current="dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <span class="nav-link text-light">Posts</span>
                <ul>
                    <li>
                        <a href="{{ route('dashboard.post.index') }}" class="nav-link text-light fw-light">Posts List</a>
                    </li>
                    <li>
                        <a href="" class="nav-link text-light fw-light">Create</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
