<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItensController extends Controller
{

    public function index()
    {
        return view('itens.index');
    }


    public function create()
    {
        return view('itens.create');
    }


    public function store(Request $request)
    {
        $dados = $request->except('_token');
        Item::create($dados);
        return redirect()->route('itens.index');
    }


    public function show(Item $item)
    {
        return view('itens.show', compact('item'));
    }

    public function edit(string $item)
    {
        return view('itens.edit', compact('item'));
    }


    public function update(Request $request, string $id)
    {
        $dados = $request->except('_token');
        Item::find($id)->update($dados);
        return redirect()->route('itens.index');
    }


    public function destroy(string $item)
    {
        $item = Item::find($item);
        $item->delete();
        return redirect()->route('itens.index');
    }
}
