<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        return view('users.index');
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $dadosUser = $request->except('_token');
        User::create($dadosUser);
        return redirect()->route('users.index');
    }

    public function edit(string $user)
    {
        return view('users.edit', compact('user'));
    }


    public function update(Request $request, string $id)
    {
        $dadosUser = $request->except('_token');
        User::find($id)->update($dadosUser);
        return redirect()->route('users.index');
    }


    public function destroy(string $user)
    {
        $user = Item::find($user);
        $user->delete();
        return redirect()->route('pedidos.index');
    }
}
