<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="C#, Javascript, PHP, Laravel, Tutorials, Projects">
    <meta name="author" content="John VanGeemen">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - John VanGeemen</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Share Tech Mono">
    <style>
        body {
            font-family: 'Share Tech Mono', serif;
            background-color: #191910;
            color: white;
        }

        p.lead {
            font-family: 'Share Tech Mono', serif;
        }

        p {
            font-family: 'IBM Plex Mono', serif;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <abbr title="Home" class="initialism">John VanGeemen</abbr>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tutorials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projects</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div class="container my-5">
            <!-- Footer -->
            <footer class="text-center text-lg-start text-white">
                <!-- Grid container -->
                <div class="container p-4 pb-0">



                    <!-- Section: Social media -->
                    <section class="mb-4 text-center">
                        <!-- Github -->
                        <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/johnvdev" role="button"><i class="fab fa-github"></i></a>
                        <!-- Linkedin -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                    </section>
                    <!-- Section: Social media -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3">
                    © 2022 Copyright:
                    <a class="text-white" href="https://johnvangeemen.ca">johnvangeemen.ca</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </div>
    </div>
</body>

</html>