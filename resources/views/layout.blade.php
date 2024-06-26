<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <!-- barra usuario -->
    <div class="container-fluid">
        @auth
        <div class="row bg-dark text-white">
            <div class="col-8">
                Bienvenido <span class="fw-bold">{{ auth()->user()->name }}</span>
            </div>
            <div class="col-3 text-end d-none d-lg-block">
                Último inicio de sesión {{ auth()->user()->updated_at }}
            </div>
            <div class="col-1 text-end d-none d-lg-block">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-link text-white">Cerrar Sesión</button>
                </form>
            </div>
        </div>
        @endauth
    </div>

    <!-- navbar -->
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Minimarket</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='home.index') active @endif" 
                            aria-current="page" href="{{route('home.index')}}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='lacteos.index') active @endif"
                            href="{{route('lacteos.index')}}">Lácteos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='cecinas.index') active @endif"
                            href="{{route('cecinas.index')}}">Cecinas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='bebidas.index') active @endif"
                            href="{{route('bebidas.index')}}">Bebidas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='galletas.index') active @endif"
                            href="{{route('galletas.index')}}">Galletas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='otros.index') active @endif"
                            href="{{route('otros.index')}}">Otros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='panaderia.index') active @endif"
                            href="{{route('panaderia.index')}}">Panadería</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='carrito.index') active @endif"
                            href="{{route('carrito.index')}}">Carrito</a>
                        </li>
                        @auth
                        @if(auth()->user()->role === 'admin')
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='profiles.index') active @endif" 
                            aria-current="page" href="{{ route('profiles.index') }}">Perfiles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(Route::current()->getName()=='profiles.create') active @endif" 
                            aria-current="page" href="{{ route('profiles.create') }}">Crear Usuario</a>
                        </li>
                        @endif
                        @endauth
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
    <div class="container">
        @yield('contenido-principal')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>

</html>
