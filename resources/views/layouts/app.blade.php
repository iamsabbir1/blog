<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>

<body>
    <nav id="navigation-bar">
        <div id="logo">
            <a href="#">BLOG</a>
        </div>
        <ul id="navigation-item">
            <li>Home</li>
            <li>Category</li>
            <li>Contact Us</li>
            <li>About</li>
        </ul>
        <div id="auth">
            @auth
            <a href="#">Profile</a>
            <a href="#">Logout!</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    </nav>

    <div id="content">
        @yield('content')
    </div>

    <footer>
        @yield('footer')
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>