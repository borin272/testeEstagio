@extends('layouts.app')

@section('title', 'Gerenciamento de estoque')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Login</h1>
                </div>
                <div class="card-body">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" name="loginemail" placeholder="Email" class="form-control">
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
</div>
@endsection
