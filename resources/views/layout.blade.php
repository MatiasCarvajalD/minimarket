<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>@yield('title', 'Minimarket Carolina')</title>
    <style>
        .navbar-nav {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        .navbar-nav .nav-item {
            margin-left: 15px;
        }
        .navbar-nav .nav-item .nav-link {
            color: #fff;
        }
        .navbar-nav .nav-item .nav-link.active {
            font-weight: bold;
            color: #ffc107;
        }
        body {
            background-color: #f8f9fa;
        }
        .main-content {
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }
        .category-title {
            background-color: #007bff;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem 0.5rem 0 0;
            font-size: 1.2rem;
            font-weight: bold;
        }
        .product-card {
            margin-bottom: 1rem;
        }
        .product-card img {
            border-bottom: 1px solid #ddd;
        }
        .product-card .card-body {
            padding: 1rem;
        }
    </style>
</head>

<body>
    <!-- Barra usuario -->
    <div class="container-fluid">
        <div class="row bg-dark text-white py-2">
            <div class="col-8">
                Bienvenido <span class="fw-bold">{{ Auth::user()->name ?? 'Usuario' }}</span>
            </div>
            <div class="col-3 text-end d-none d-lg-block">
                Último inicio de sesión {{ Auth::user()->last_login ?? 'N/A' }}
            </div>
            <div class="col-1 text-end d-none d-lg-block">
                <a href="{{ route('logout') }}" class="text-white">Cerrar Sesión</a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Minimarket Carolina</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='home') active @endif" 
                            aria-current="page" href="{{ route('home') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='cecinas') active @endif"
                            href="{{ route('cecinas') }}">Cecinas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='bebidas') active @endif"
                            href="{{ route('bebidas') }}">Bebidas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='galletas') active @endif"
                            href="{{ route('galletas') }}">Galletas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='lacteos') active @endif"
                            href="{{ route('lacteos') }}">Lácteos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='otros') active @endif"
                            href="{{ route('otros') }}">Otros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='carrito') active @endif"
                            href="{{ route('carrito') }}">Carrito</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="{{ route('logout') }}">Cerrar Sesión</a>
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

    <!-- Contenido Principal -->
    <div class="container main-content">
        @yield('contenido-principal')
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 Minimarket Carolina. Todos los derechos reservados.
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>
