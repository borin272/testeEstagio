@extends('layouts.app')

@section('title', 'Gerenciamento de estoque')

@section('content')

    @if (!Auth::check())
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card shadow-lg my-auto card-register">
                        <div class="card-header bg-dark text-white">
                            <h1 class="text-center mb-0">Registre-se</h1>
                        </div>
                        <div class="card-body px-4 py-4">
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

                                <div class="d-grid gap-3">
                                    <button type="submit" class="btn btn-dark w-100 py-2">Registrar</button>
                                    <a href="/login" class="btn btn-outline-dark w-100 py-2">Já tem uma conta? Faça
                                        login</a>
                                </div>
                            </form>
                        </div>
    @endif
@endsection
