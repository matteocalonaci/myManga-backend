<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fontawesome 6 cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
        integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        {{-- rgb(198, 23, 81)" --}}
        <div class="container-fluid vh-100"style="background-color:rgb(235, 0, 78)">
            <div class="row h-100">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse"style="background-color:  rgb(198, 23, 81) ">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a class="nav-link text-white" href="/">
                                    <i class="fa-solid fa-home-alt fa-lg fa-fw"></i> Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-secondary' : '' }}"
                                    href="{{ route('admin.dashboard') }}">
                                    <i class="fa-solid fa-tachometer-alt fa-lg fa-fw"></i> Dashboard
                                </a>
                            </li>

                            @auth
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('admin.mangas.create') }}">
                                        <i class="fa-solid fa-plus fa-lg fa-fw"></i> Crea Nuovo Manga
                                    </a>
                                </li>
                            @endauth

                            @auth
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('admin.editors.create') }}">
                                        <i class="fa-solid fa-plus fa-lg fa-fw"></i> Crea Nuovo Editore
                                    </a>
                                </li>
                            @endauth

                            @auth
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('admin.genres.create') }}">
                                        <i class="fa-solid fa-plus fa-lg fa-fw"></i> Crea Nuovo Genere
                                    </a>
                                </li>
                            @endauth

                            @auth
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('admin.categories.create') }}">
                                        <i class="fa-solid fa-plus fa-lg fa-fw"></i> Crea Nuova Categoria
                                    </a>
                                </li>
                            @endauth

                            @auth
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('admin.authors.create') }}">
                                        <i class="fa-solid fa-plus fa-lg fa-fw"></i> Crea Nuovo Autore
                                    </a>
                                </li>
                            @endauth

                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-sign-out-alt fa-lg fa-fw"></i> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>

                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
            </div>
        </div>

    </div>

</body>

</html>
