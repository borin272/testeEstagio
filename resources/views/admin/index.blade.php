@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="mb-4 text-center">Painel Administrativo</h1>

            <div class="row g-4">
                <div class="col-md-6">
                    <a href="{{ route('admin.usuarios') }}" class="card card-hover h-100 text-decoration-none">
                        <div class="card-body text-center py-5">
                            <div class="mb-2">
                            </div>
                            <h3 class="card-title mb-2">Gerenciar Usuários</h3>
                            <p class="text-muted mb-0">Visualize e edite usuários cadastrados</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="{{ route('admin.items.index') }}" class="card card-hover h-100 text-decoration-none">
                        <div class="card-body text-center py-5">
                            <div class="mb-3">
                            </div>
                            <h3 class="card-title mb-2">Gerenciar Itens</h3>
                            <p class="text-muted mb-0">Controle todos os itens do sistema</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ url('/dashboard') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-left me-2"></i>Voltar ao Site
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .card-hover {
        transition: transform 0.2s, box-shadow 0.2s;
        border: 1px solid rgba(0,0,0,0.125);
    }

    .card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        cursor: pointer;
    }

    .card-title {
        color: #2c3e50;
    }
</style>
@endsection
