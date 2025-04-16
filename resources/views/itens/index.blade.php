@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-lg-8"> <!-- Reduz a largura do conteúdo -->
            <h1 class="h3 mb-4">Editar Perfil</h1> <!-- Título menor -->

            <form method="POST" action="{{ route('perfil.update') }}" class="compact-form">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label small text-muted">Nome</label>
                    <input type="text" class="form-control form-control-sm" id="name" name="name"
                           value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label small text-muted">Email</label>
                    <input type="email" class="form-control form-control-sm" id="email" name="email"
                           value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="mb-3">
                    <label for="telefone" class="form-label small text-muted">Telefone</label>
                    <input type="text" class="form-control form-control-sm" id="telefone" name="telefone"
                           value="{{ old('telefone', $user->telefone) }}" required>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                    <a href="{{ route('perfil.show') }}" class="btn btn-sm btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    /* Adicione no seu CSS */
    .compact-form {
        font-size: 0.9rem;
    }
    .compact-form .form-control-sm {
        padding: 0.25rem 0.5rem;
    }
</style>
@endsection
