@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="alert alert-success">
        <p>Bem-vindo à sua dashboard, {{ Auth::user()->name }}!</p>
    </div>

    <!-- Conteúdo da dashboard aqui -->

</div>
@endsection
