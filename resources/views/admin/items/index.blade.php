@extends('layouts.app')

@section('title', 'Gerenciamento de Itens')

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="h1 mb-3 text-gray-800">
                    Gerenciamento de Itens
                </h1>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12 text-center">
                <a href="{{ route('admin.items.create') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-plus"></i> Adicionar Item
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <div class="alert alert-success alert-dismissible fade show w-75 mx-auto">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="card shadow mx-auto" style="max-width: 95%;">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-center m-0">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Valor</th>
                                        <th>Estoque</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td class="align-middle">{{ $item->id }}</td>
                                            <td class="align-middle">{{ $item->nome }}</td>
                                            <td class="align-middle">R$ {{ number_format($item->valor, 2, ',', '.') }}</td>
                                            <td
                                                class="align-middle {{ $item->quantidade < 5 ? 'text-danger font-weight-bold' : '' }}">
                                                {{ $item->quantidade }}
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex justify-content-center">
                                                    <a href="{{ route('admin.items.edit', $item->id) }}"
                                                        class="btn btn-sm btn-warning mx-2" title="Editar">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.items.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger mx-1"
                                                            title="Excluir" onclick="return confirm('Tem certeza?')">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paginação Centralizada -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                {{ $items->links() }}
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* Estilos Adicionais para Centralização */
        .card {
            border-radius: 15px;
        }

        .alert {
            max-width: 600px;
        }

        .table {
            margin: 0 auto;
            width: 100%;
        }

        /* Ajuste para a paginação */
        .pagination {
            justify-content: center;
        }
    </style>
@endpush

@push('scripts')
    <!-- Remova as referências ao DataTables se não for mais usar -->
@endpush
