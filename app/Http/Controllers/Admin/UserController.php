<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Listar todos os usuários (exceto admins, se desejar)
    public function index()
    {
        $users = User::where('cargo', 'funcionario')->get();
        return view('admin.usuarios', compact('users'));
    }

    // Promover usuário para admin
    public function promover(User $user)
    {
        $user->update(['cargo' => 'admin']);
        return back()->with('success', 'Usuário promovido a admin!');
    }
}
