{{--<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">--}}
{{--    <div class="container">--}}

{{--        --}}{{-- Logo --}}
{{--        <a class="navbar-brand me-5" href="{{ route('admin.news.index') }}">Asta Logistiek</a>--}}

{{--        --}}{{-- Hamburger-menu for mobile --}}
{{--        <button class="navbar-toggler"--}}
{{--                type="button"--}}
{{--                data-bs-toggle="collapse"--}}
{{--                data-bs-target="#adminNavbar"--}}
{{--                aria-controls="adminNavbar"--}}
{{--                aria-expanded="false"--}}
{{--                aria-label="Navigatie"--}}
{{--        >--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse bg-dark" id="adminNavbar">--}}

{{--            --}}{{-- Navigation links --}}
{{--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
{{--                <li class="nav-item px-3">--}}
{{--                    <a--}}
{{--                        class="nav-link {{ request()->routeIs('admin.dashboard.*') ? 'active' : '' }}"--}}
{{--                        href="{{ route('admin.dashboard.index') }}"--}}
{{--                    >--}}
{{--                        Dashboard--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item px-3">--}}
{{--                    <a--}}
{{--                        class="nav-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}"--}}
{{--                        href="{{ route('admin.news.index') }}"--}}
{{--                    >--}}
{{--                        Nieuws--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item px-3">--}}
{{--                    <a--}}
{{--                        class="nav-link {{ request()->routeIs('admin.vacancies.*') ? 'active' : '' }}"--}}
{{--                        href="{{ route('admin.vacancies.index') }}"--}}
{{--                    >--}}
{{--                        Vacatures--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item px-3">--}}
{{--                    <a--}}
{{--                        class="nav-link {{ request()->routeIs('admin.contact.*') ? 'active' : '' }}"--}}
{{--                        href="{{ route('admin.contact.index') }}"--}}
{{--                    >--}}
{{--                        Contact--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--            --}}{{-- Logout button --}}
{{--            <form method="POST" action="{{ route('logout') }}">--}}
{{--                @csrf--}}
{{--                <button class="btn btn-outline-light btn-sm" type="submit">Uitloggen</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

<nav class="navbar navbar-expand-lg navbar-dark" style="margin-bottom: 4rem; background-color: #1b2430; box-shadow: 0 2px 6px rgba(0,0,0,.4);">
    <div class="container-fluid">

        {{-- Logo --}}
        <a class="navbar-brand fw-bold text-primary d-flex align-items-center" href="{{ route('admin.dashboard.index') }}">
            <i class="bi bi-truck me-2"></i> ASTA Logistiek
        </a>

        {{-- Hamburger-menu for mobile --}}
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Navigation links --}}
        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->routeIs('admin.dashboard.*') ? 'active-link' : 'text-light' }}"
                       href="{{ route('admin.dashboard.index') }}">
                        <i class="bi bi-speedometer2 me-1"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->routeIs('admin.news.*') ? 'active-link' : 'text-light' }}"
                       href="{{ route('admin.news.index') }}">
                        <i class="bi bi-newspaper me-1"></i> Nieuws
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->routeIs('admin.vacancies.*') ? 'active-link' : 'text-light' }}"
                       href="{{ route('admin.vacancies.index') }}">
                        <i class="bi bi-briefcase me-1"></i> Vacatures
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->routeIs('admin.contact.*') ? 'active-link' : 'text-light' }}"
                       href="{{ route('admin.contact.index') }}"
                    >
                        <i class="bi bi-inbox me-1"></i> Contact
                    </a>
                </li>
            </ul>

            {{-- Logout button --}}
            <form method="POST" action="{{ route('logout') }}" class="d-flex">
                @csrf
                <button class="btn btn-sm btn-outline-primary d-flex align-items-center" type="submit">
                    <i class="bi bi-box-arrow-right me-1"></i> Uitloggen
                </button>
            </form>
        </div>
    </div>
</nav>

