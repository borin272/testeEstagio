@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="alert alert-success">
        <p>Bem-vindo à sua dashboard, {{ Auth::user()->name }}!</p>
    </div>

    <!-- Conteúdo da dashboard aqui -->

    @if (Auth::user()->role === 'admin')
        <a href="{{ route('admin.usuarios') }}" class="btn btn-primary">Painel Admin</a>
    @endif

    <form action="/logout" method="POST" class="mt-4">
        @csrf
        <button type="submit" class="btn btn-danger">Sair</button>
    </form>
</div>
@endsection
