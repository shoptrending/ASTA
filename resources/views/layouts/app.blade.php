<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @yield('content')
    </body>
</html>

<!DOCTYPE html>
<html lang="nl">
    <x-head title="ASTA Logistiek" description="Transport & logistieke diensten" />
<body class="antialiased bg-white text-gray-800">
@yield('content')
</body>
</html>
