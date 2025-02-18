<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <base href="{{ \URL::to('/') }}">

    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdn.fontawesome.com/6.0.0-beta3/cs s/all.min.css">


    <link rel="icon" type="image/x-icon" href="{{ asset('faviconnsss.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="bg-white dark:bg-gray-900 overflow-hidden">
    <main>
        <div class="px-4 pt-6">
            @yield('content')
        </div>
    </main>

    <script src="{{ asset('assets/css/app.js') }}"></script>
    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const isDarkMode = localStorage.getItem('darkMode') === 'enabled';
            if (isDarkMode) {
                document.documentElement.classList.add(
                    'dark');
            }
        });
    </script>
</body>

</html>
