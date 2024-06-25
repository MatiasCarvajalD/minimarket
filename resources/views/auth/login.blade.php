<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>Login - Minimarket Carolina</title>
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="text-center mb-4">
            <img src="{{ asset('images/logo_minimarket.png') }}" alt="Minimarket Carolina" width="72">
            <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group mb-3">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" required autofocus>
            </div>
            <div class="form-group mb-3">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
