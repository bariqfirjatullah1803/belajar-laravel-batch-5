<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Laravel</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    @include('layouts.partials.navbar')

    <main class="container" style="min-height: 70vh">
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    </script>
</body>

</html>
