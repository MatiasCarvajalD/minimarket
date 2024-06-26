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
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->where('password', $credentials['password'])->first();

        if ($user) {
            Auth::login($user);
            return redirect()->route('home.index');
        }

        return back()->withErrors(['email' => 'Credenciales no válidas']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password; // Guardar la contraseña en texto plano
        $user->role = 'user';
        $user->save();

        return redirect()->route('login')->with('success', 'Usuario creado exitosamente');
    }
}
