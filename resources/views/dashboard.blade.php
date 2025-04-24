@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container py-4">
        <h1 class="mb-0 text-center">Dashboard</h1>

        <div class="row g-3 mb-1">
            @isset($totalItens)
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 h-75">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">Total de Itens</h5>
                        </div>
                        <div class="card-body text-center py-4">
                            <p class="display-5 fw-bold text-primary mb-0">{{ $totalItens }}</p>
                        </div>
                    </div>
                </div>
            @endisset

            @isset($valorTotal)
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 h-75">
                        <div class="card-header bg-success text-white">
                            <h5 class="card-title mb-0">Valor Total em Estoque</h5>
                        </div>
                        <div class="card-body text-center py-4">
                            <p class="display-5 fw-bold text-success mb-0">R$ {{ number_format($valorTotal, 2, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            @endisset

            @isset($itensBaixoEstoque)
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 h-75">
                        <div class="card-header bg-warning text-dark">
                            <h5 class="card-title mb-0">Itens com Baixo Estoque</h5>
                        </div>
                        <div class="card-body text-center py-4">
                            <p class="display-5 fw-bold text-warning mb-0">{{ $itensBaixoEstoque }}</p>
                        </div>
                    </div>
                </div>
            @endisset
        </div>

        @isset($ultimosItens)
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-dark text-white">
                            <h5 class="mb-0">Últimos Itens Cadastrados</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="px-4">Nome</th>
                                            <th class="px-4">Valor</th>
                                            <th class="px-4">Quantidade</th>
                                            <th class="px-4">Descrição</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ultimosItens as $item)
                                            <tr>
                                                <td class="px-4">{{ $item->nome }}</td>
                                                <td class="px-4">R$ {{ number_format($item->valor, 2, ',', '.') }}</td>
                                                <td class="px-4">{{ $item->quantidade }}</td>
                                                <td class="px-4">{{ $item->descricao }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endisset
    </div>
@endsection
