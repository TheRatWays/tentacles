<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include("includes.head")
</head>

<body>
    <div class="container">
        <header class="row">
            @include('includes.header')
        </header>

        <main id="main" class="row">
            @yield('content')
        </main>

        <footer class="row">
            @include('includes.footer')
        </footer>
    </div>
</body>
</html>
