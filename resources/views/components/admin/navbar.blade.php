<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">

        {{-- Logo --}}
        <a class="navbar-brand me-5" href="{{ route('admin.news.index') }}">Asta Logistiek</a>

        {{-- Hamburger-menu for mobile --}}
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#adminNavbar"
                aria-controls="adminNavbar"
                aria-expanded="false"
                aria-label="Navigatie"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse bg-dark" id="adminNavbar">

            {{-- Navigation links --}}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-3">
                    <a
                        class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard.index') }}"
                    >
                        Dashboard
                    </a>
                </li>
                <li class="nav-item px-3">
                    <a
                        class="nav-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}"
                        href="{{ route('admin.news.index') }}"
                    >
                        Nieuws
                    </a>
                </li>
                <li class="nav-item px-3">
                    <a
                        class="nav-link {{ request()->routeIs('admin.vacancies.*') ? 'active' : '' }}"
                        href="{{ route('admin.vacancies.index') }}"
                    >
                        Vacatures
                    </a>
                </li>
            </ul>

            {{-- Logout button --}}
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-outline-light btn-sm" type="submit">Uitloggen</button>
            </form>
        </div>
    </div>
</nav>
