@extends('layout')

@section('title', 'Crear Perfil')

@section('contenido-principal')
<div class="container mt-5">
    <h1>Crear Perfil</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('profiles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Rol</label>
            <select id="role" name="role" class="form-control" required>
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
        </div>
        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-success">Crear Perfil</button>
        </div>
    </form>
</div>
@endsection
