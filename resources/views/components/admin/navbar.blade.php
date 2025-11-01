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
            <form method="POST" action="{{ route('auth.logout') }}" class="d-flex">
                @csrf
                <button class="btn btn-sm btn-outline-primary d-flex align-items-center" type="submit">
                    <i class="bi bi-box-arrow-right me-1"></i> Uitloggen
                </button>
            </form>
        </div>
    </div>
</nav>

