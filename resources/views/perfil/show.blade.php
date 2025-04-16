@extends('layouts.app')

@section('content')
<div class="container pt-1">
    <div class="d-flex justify-content-center">
        <div class="w-100" style="max-width:500px;">
            <div class="card shadow">
                <div class="card-body p-4">
                <h1 class="card-title text-center mb-3">Meu Perfil</h1>

                <div class="user-info">
                    <div class="mb-3">
                        <strong>Nome:</strong>
                        <p class="mt-1">{{ $user->name }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Email:</strong>
                        <p class="mt-1">{{ $user->email }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Telefone:</strong>
                        <p class="mt-1">{{ $user->telefone }}</p>
                    </div>

                    <div class="mb-4">
                        <strong>Cargo:</strong>
                        <p class="mt-1">{{ $user->cargo ?? 'Não informado' }}</p>
                    </div>

                    <div class="d-grid">
                        <a href="{{ route('perfil.edit') }}" class="btn btn-primary">
                            <i class="bi bi-pencil-square me-2"></i>Editar Perfil
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
