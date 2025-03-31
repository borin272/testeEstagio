<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; // Adicione esta linha
use App\Models\User;

class AuthController extends Controller
{
    // Mostrar formulário de login
    public function showLoginForm()
    {
        return view('index');
    }

    // Processar login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) { // Alterado para Auth facade
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Credenciais inválidas',
        ])->onlyInput('email');
    }

    // Mostrar formulário de registro
    public function showRegistrationForm()
    {
        return view('auth.register'); // Sua view de registro
    }

    // Processar registro
    public function register(Request $request)
{
    // 1. Validação dos dados
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'telefone' => 'required|string|max:20',
    ]);

    // 2. Tentativa de criar usuário e login
    try {
        // Cria o usuário
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']), // Senha hasheada
            'telefone' => $validatedData['telefone']
        ]);

        // Login imediato após registro (usando facade Auth)
        Auth::login($user);

        // Redireciona com mensagem de sucesso
        return redirect('/dashboard')->with('success', 'Cadastro realizado com sucesso!');

    } catch (\Exception $e) {
        // Em caso de erro, retorna com mensagem detalhada
        return back()
               ->withErrors(['error' => 'Erro no registro: ' . $e->getMessage()])
               ->withInput($request->except('password'));
    }
}
}
