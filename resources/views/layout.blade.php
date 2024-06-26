<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>@yield('title', 'Minimarket Carolina')</title>
    <style>
        .navbar-custom {
            background: linear-gradient(to bottom, #ff9966 0%, #ff5e62 100%);
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            color: white;
        }

        .navbar-custom .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.9);
        }

        .navbar-custom .navbar-nav .nav-link:hover {
            color: white;
        }

        .navbar-custom .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.1);
        }

        .navbar-custom .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%288, 8, 8, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/ %3E%3C/svg%3E");
        }
    </style>
</head>

<body style="background: linear-gradient(to bottom, #ff9966 0%, #ff5e62 100%);">
    <!-- barra usuario -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home.index') }}">Minimarket</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lacteos.index') }}">Lácteos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cecinas.index') }}">Cecinas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('bebidas.index') }}">Bebidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('galletas.index') }}">Galletas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('panaderia.index') }}">Panadería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('otros.index') }}">Otros</a>
                    </li>
                    @if(Auth::check() && Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profiles.index') }}">Perfiles</a>
                    </li>
                    @endif
                </ul>
                <span class="navbar-text me-3">
                    Bienvenido {{ Auth::user()->name }}
                </span>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('carrito.index') }}">Carrito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('contenido-principal')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
