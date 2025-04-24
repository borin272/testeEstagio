<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::latest()->paginate(10);
        return view('admin.items.index', compact('items')); // Corrigido para apontar para a view correta
    }

    public function create()
    {
        return view('admin.items.create'); // Corrigido para usar o caminho admin
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nome' => 'required|string|max:255',
        'descricao' => 'nullable|string',
        'valor' => 'required',
        'quantidade' => 'required|integer|min:0',
    ]);

    $validated['valor'] = str_replace('.', '', $validated['valor']);
    $validated['valor'] = str_replace(',', '.', $validated['valor']);
    $validated['valor'] = (float)$validated['valor'];

    Item::create($validated);

    return redirect()->route('admin.items.index')->with('success', 'Item criado com sucesso!');
}
    public function show(Item $item)
    {
        return view('admin.items.show', compact('item')); // Corrigido para usar o caminho admin
    }

    public function edit(Item $item)
    {
        return view('admin.items.edit', compact('item')); // Corrigido para usar o caminho admin
    }

    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'valor' => 'required|numeric|min:0',
            'quantidade' => 'required|integer|min:0'
        ]);

        $item->update($validated);

        return redirect()->route('admin.items.index')->with('success', 'Item atualizado com sucesso!'); // Corrigida a rota
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('admin.items.index')->with('success', 'Item removido com sucesso!'); // Corrigida a rota
    }
}
