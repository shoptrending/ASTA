<!doctype html>
<html lang="nl">
    <x-head
        title="Admin Dashboard | ASTA Logistiek"
        description="Beheeromgeving van ASTA Logistiek"
        :isAdmin="true"
    />

    <body class="bg-light">
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
