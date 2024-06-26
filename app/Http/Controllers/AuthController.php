<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validar las credenciales del usuario
        $credentials = $request->only('email', 'password');

        // Intentar encontrar el usuario manualmente sin encriptación
        $user = User::where('email', $credentials['email'])->where('password', $credentials['password'])->first();

        if ($user) {
            Auth::login($user);
            return redirect()->route('home.index');
        }

        // Redirigir de vuelta al formulario de inicio de sesión con un mensaje de error
        return redirect()->route('login')->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

