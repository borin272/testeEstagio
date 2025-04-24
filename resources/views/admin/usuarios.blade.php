@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Gerenciar Usuários</h2>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cargo Atual</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ucfirst($user->cargo) }}</td>
                        <td>
                            @if ($user->cargo === 'funcionario')
                                <form action="{{ route('admin.usuarios.promover', $user) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success btn-sm">
                                        Promover a Admin
                                    </button>
                                </form>
                            @else
                                {{-- Exibe o botão de rebaixar APENAS se não for o root (admin@a.com) --}}
                                @if ($user->email !== 'admin@a.com')
                                    <form action="{{ route('admin.usuarios.rebaixar', $user) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Tem certeza que deseja rebaixar este usuário?')">
                                            Rebaixar a Funcionário
                                        </button>
                                    </form>
                                @endif
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
