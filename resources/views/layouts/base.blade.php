<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.head')
</head>

<body>
    <!-- Header -->
    <header>
        @include('includes.header')
    </header>

    <!-- Main Content -->
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer>
        @include('includes.footer')
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
