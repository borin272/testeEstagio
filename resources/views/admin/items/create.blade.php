@extends('layouts.app')

@section('title', 'Adicionar Novo Item')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white py-2">
                    <h5 class="mb-0">Adicionar Novo Item</h5>
                </div>

                <div class="card-body p-3">
                    <form action="{{ route('admin.items.store') }}" method="POST" class="vstack gap-2">
                        @csrf

                        <div class="mb-2">
                            <label for="nome" class="form-label small mb-1">Nome do Item</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>

                        <div class="mb-2">
                            <label for="descricao" class="form-label small mb-1">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao" rows="1"></textarea>
                        </div>

                        <div class="row g-2">
                            <div class="col-md-6">
                                <label for="valor" class="form-label small mb-1">Valor (R$)</label>
                                <input type="number" step="0.01" class="form-control" id="valor" name="valor" required>
                            </div>
                            <div class="col-md-6">
                                <label for="quantidade" class="form-label small mb-1">Estoque</label>
                                <input type="number" class="form-control" id="quantidade" name="quantidade" required>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-3">
                            <a href="{{ route('admin.items.index') }}" class="btn btn-secondary btn-sm">
                                Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary btn-sm">
                                Salvar Item
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
