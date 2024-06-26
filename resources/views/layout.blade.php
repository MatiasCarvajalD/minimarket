<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    <!-- barra usuario -->
    <div class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="col-8">
                Bienvenido <span class="fw-bold">User1</span>
            </div>
            <div class="col-3 text-end d-none d-lg-block">
                Último inicio de sesión 01/04/2023 a las 18:34
            </div>
            <div class="col-1 text-end d-none d-lg-block">
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-link text-white" style="text-decoration: none;">Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </div>

    <!-- navbar -->
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MiMarket</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::currentRouteName() == 'home.index') active @endif" 
                            aria-current="page" href="{{ route('home.index') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::currentRouteName() == 'bebidas.index') active @endif"
                            href="{{ route('bebidas.index') }}">Bebidas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::currentRouteName() == 'cecinas.index') active @endif"
                            href="{{ route('cecinas.index') }}">Cecinas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::currentRouteName() == 'galletas.index') active @endif"
                            href="{{ route('galletas.index') }}">Galletas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::currentRouteName() == 'lacteos.index') active @endif"
                            href="{{ route('lacteos.index') }}">Lácteos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::currentRouteName() == 'otros.index') active @endif"
                            href="{{ route('otros.index') }}">Otros</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link" style="text-decoration: none;">Cerrar Sesión</button>
                            </form>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- contenido principal -->
    <div class="container mt-5">
        @yield('contenido-principal')
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>
</html>
