@extends('layouts.app')

@section('title', 'Gerenciamento de estoque')

@section('content')
    @auth
        <div class="alert alert-success">
            <p>Parabéns! Você está autenticado.</p>
        </div>
        <form action="/logout" method="POST" class="mb-4">
            @csrf
            <button type="submit" class="btn btn-danger">Sair</button>
        </form>
    @else
        <div class="row">
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
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Login</h1>
                    </div>
                    <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="loginname" placeholder="Nome" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="loginpassword" placeholder="Senha" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
