<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class PedidosController extends Controller
{

    public function index()
    {
        return view('pedidos.index');
    }


    public function create()
    {
        return view('pedidos.create');
    }


    public function store(Request $request)
    {
        $dadosPedido = $request->except('_token');
        Item::create($dadosPedido);
        return redirect()->route('pedidos.index');
    }


    public function show(Item $pedido)
    {
        return view('pedidos.show', compact('pedido'));
    }

    public function edit(string $pedido)
    {
        return view('pedido.edit', compact('pedido'));
    }


    public function update(Request $request, string $id)
    {
        $dadosPedido = $request->except('_token');
        Item::find($id)->update($dadosPedido);
        return redirect()->route('pedidos.index');
    }


    public function destroy(string $pedido)
    {
        $pedido = Item::find($pedido);
        $pedido->delete();
        return redirect()->route('pedidos.index');
    }
}
