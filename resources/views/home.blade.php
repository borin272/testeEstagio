@extends('layouts.app')

@section('title', 'Gerenciamento de estoque')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Registre-se</h1>
                </div>
                <div class="card-body">
                    <form action="/register" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" name="name" placeholder="Nome" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" name="telefone" placeholder="Telefone" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" name="password" placeholder="Senha" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <a href="/login" class="btn btn-outline-secondary ms-2">Já tem uma conta? Faça login</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
