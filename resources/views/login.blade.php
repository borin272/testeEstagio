@extends('layouts.app')

@section('title', 'Gerenciamento de estoque')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-lg my-auto"> <!-- Added my-auto -->
                    <div class="card-header bg-dark text-white">
                        <h1 class="text-center mb-0">Login</h1>
                    </div>
                    <div class="card-body px-4 py-4">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group mb-4"> <!-- Aumentei o espaçamento -->
                                <input type="email" name="loginemail" placeholder="Email"
                                    class="form-control form-control-lg"> <!-- Tamanho maior -->
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" name="loginpassword" placeholder="Senha"
                                    class="form-control form-control-lg">
                            </div>

                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-dark w-100 py-2">
                                    Entrar
                                </button>
                                <a href="/" class="btn btn-outline-dark w-100 py-2">
                                    Não tem conta? Registre-se
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
