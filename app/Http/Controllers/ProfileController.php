<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;  // No encriptado 
        $user->role = $request->role;
        $user->save();

        return redirect()->route('profiles.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('profiles.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|min:6',
            'role' => 'required'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = $request->password;
        }
        $user->role = $request->role;
        $user->save();

        return redirect()->route('profiles.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if (auth()->user()->id === $user->id) {
            return redirect()->route('profiles.index')->withErrors('No puedes eliminarte a ti mismo.');
        }

        $user->delete();

        return redirect()->route('profiles.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
