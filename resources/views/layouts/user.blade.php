<!DOCTYPE html>
<html class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <base href="{{ \URL::to('/') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('faviconnsss.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app.js') }}"> --}}
    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>


</head>

<body class="bg-white dark:bg-gray-900">
    <main class="mx-auto lg:max-w-7xl md:px-8 flex flex-col min-h-screen bg-white dark:bg-gray-900">
        {{-- @include('components.header') --}}
        @include('components.Navbar')
        @yield('content')
        @include('components.footer')
    </main>


</body>

</html>
