<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Admin • @yield('title', 'Beheer')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.news.index') }}">Asta Logistiek</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-light btn-sm" type="submit">Uitloggen</button>
        </form>
    </div>
</nav>

<main class="container">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
