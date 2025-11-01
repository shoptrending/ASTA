<!doctype html>
<html lang="nl">
    <x-head
        title="Admin Dashboard | ASTA Logistiek"
        description="Beheeromgeving van ASTA Logistiek"
        :isAdmin="true"
    />

    <body>
        <x-admin.navbar />

        <main class="container">
            @yield('content')
        </main>

        {{-- Import Bootstrap from the CDN --}}
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous">
        </script>
    </body>
</html>

<style>
    html,
    body {
        background-color: #2a2f36;
        color: #e5e5e5;
        min-height: 100vh;
        margin: 0;
        padding: 0;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    main.container {
        margin-top: 3rem;
        background-color: #1b2430;
        border-radius: 14px;
        padding: 2rem;
        max-width: 1100px;
        box-shadow: 0 0 10px rgba(0,0,0,0.5);
    }

    .table-hover tbody tr:hover {
        background-color: #2a2f36 !important;
        transition: background-color 0.2s ease;
    }

    .table-dark tr {
        border-color: #2b2f36;
    }

    .table-dark tbody tr:hover {
        background-color: #2c3139 !important;
    }

    .navbar .nav-link {
        transition: color 0.2s ease, background-color 0.2s ease;
    }

    .navbar .nav-link:hover {
        color: #0d6efd !important;
    }

    .active-link {
        color: #0d6efd !important;
        font-weight: 600;
        background-color: rgba(13, 110, 253, 0.1);
        border-radius: 8px;
    }
</style>
