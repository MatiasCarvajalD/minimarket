<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('profiles.index', compact('users'));
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:user,admin',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('profiles.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function destroy(User $user)
    {
        if ($user->role === 'admin' && $user->id === auth()->id()) {
            return redirect()->route('profiles.index')->with('error', 'No puedes eliminar tu propia cuenta.');
        }

        $user->delete();
        return redirect()->route('profiles.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
