@extends('layout')

@section('title', 'Editar Perfil')

@section('contenido-principal')
<div class="container mt-5">
    <h1>Editar Perfil</h1>
    <form action="{{ route('profiles.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña (dejar en blanco para no cambiar)</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Rol</label>
            <select id="role" name="role" class="form-control" required>
                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>Usuario</option>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Administrador</option>
            </select>
        </div>
        <div class="mb-3 text-end">
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
        </div>
    </form>
</div>
@endsection
