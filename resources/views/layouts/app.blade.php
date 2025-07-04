<!DOCTYPE HTML>
<!--
    Spectral by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>@yield('title', 'Spectral by HTML5 UP')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
</head>
<body class="landing is-preload">

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1><a href="{{ url('/') }}">Laravel/PHP Quiz</a></h1>
        <nav id="nav">
            <ul>
                @auth
                    <li>
                        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                            @csrf
                            <button type="submit" style="background:none; border:none; color:white; cursor:pointer; font-weight:bold;">
                                Logout
                            </button>
                        </form>
                    </li>
                @endauth

                <li class="special">
                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                    <div id="menu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#">Tests</a></li>
                            <li><a href="#">Suggest questions</a></li>
                            <li><a href="#">Elements</a></li>
                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                            <li><a href="{{ route('login') }}">Log In</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>


    {{-- Ovo je mesto gde će svaka stranica ubaciti svoj sadržaj --}}
    @yield('content')

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; 2025 Laravel/PHP Quiz App</li>
            <li>Built with ♥ by Stefan Vujic</li>
            <li><small>Template base by <a href="https://html5up.net">HTML5 UP</a></small></li>
        </ul>

    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
<script src="{{ asset('assets/js/browser.min.js') }}"></script>
<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
