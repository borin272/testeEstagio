<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'loginemail' => 'required',
            'loginpassword' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $validatedData['loginemail'],
            'password' => $validatedData['loginpassword']
        ])) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'loginemail' => 'Credenciais inválidas.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function register(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'telefone' => 'string|max:20',
        'password' => 'required|string|min:8',
        'cargo' => 'funcionario',
    ]);

    $validatedData['password'] = Hash::make($validatedData['password']);

    $user = User::create($validatedData);
    Auth::login($user);

    return redirect()->route('dashboard');
}
}
