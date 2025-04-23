<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index()
    {
        // Certifique-se de calcular todas as variáveis necessárias
        $totalItens = Item::count();
        $valorTotal = Item::sum(DB::raw('valor * quantidade'));
        $itensBaixoEstoque = Item::where('quantidade', '<', 5)->count();
        $ultimosItens = Item::latest()->take(5)->get();

        // Passe todas as variáveis para a view
        return view('dashboard', compact(
            'totalItens',
            'valorTotal',
            'itensBaixoEstoque',
            'ultimosItens'
        ));
    }
}
