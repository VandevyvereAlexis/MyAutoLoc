<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- FONT "PROMPT" -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
        <!-- FONT "MONTSERRAT" -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    </head>


    <!-- BODY 
    ==================================================================-->
    <body>
        <div id="app">

            <!-- NAVBAR 
            ==================================================================-->
            <nav class="navbar navbar-expand-md fixed-top border-bottom rounded-bottom bg-dark p-1" data-bs-theme="dark" id="navbar">
                <div class="container-fluid">


                    <!-- LOGO -->
                    <a class="navbar-brand ms-4" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" id="logo_navbar_app_blade">
                    </a>

                    <!-- MENU BURGER -->
                    <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <!-- LIENS D'ATHENTIFICATION
                    ==================================================================-->
                    <div class="collapse navbar-collapse justify-content-end me-4" id="navbarSupportedContent">
                        <div class="navbar-nav gap-2 d-flex align-items-center" id="liens-navbar">

                            <a class="nav-link liste position-relative py-0 text-center" href="{{ route('vehicules.index') }}">
                                <span>Véhicules</span>
                            </a>

                            @guest
                                @if (Route::has('login'))

                                    <!-- LIEN CONNEXION -->
                                    <a class="nav-link liste position-relative py-0 text-center" href="{{ route('login') }}"><span>{{ __('Connexion') }}</span></a>

                                @endif

                                @if (Route::has('register'))

                                    <!-- LIEN INSCRIPTION -->
                                    <a class="nav-link liste position-relative py-0 text-center" href="{{ route('register') }}"><span>{{ __('Inscription') }}</span></a>

                                @endif
                            @else

                                <!-- NAVBAR DEROULER 
                                ==================================================================-->
                                <div class="nav-item dropdown">

                                    <!-- AFFICHAGE PSEUDO -->
                                    <a href="{{ route('user.edit', $user = Auth::user() )}}" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <img src="{{ asset("images/$user->image") }} " class="rounded-circle" style="width: 2.1rem; height: 2.1rem" alt="imageUtilisateur">
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                        <!-- LIEN VERS "MON COMPTE" -->
                                        <a class="dropdown-item" href="{{ route('user.edit', $user = Auth::user() )}}">Mon compte</a>

                                        <!-- LIEN DECONNEXION -->
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>

                                    </div>
                                </div>

                            @endguest


                        </div>
                    </div>


                </div>
            </nav>


            <!-- MAIN 
            ==================================================================-->
            <main>
                @yield('content')
            </main>


        </div>
    </body>


</html>
