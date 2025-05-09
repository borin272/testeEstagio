<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}" style="font-family: 'Segoe UI', system-ui, sans-serif;">
            <span style="font-weight: 550;">ESTOQUES</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto flex-row gap-3">
                @auth
                    <li class="nav-item">
                        @if (Auth::user()->cargo === 'admin')
                            <a href="{{ route('admin.index') }}" class="btn btn-outline-light btn-sm">
                                Painel Admin
                            </a>
                        @endif
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('perfil.show') }}" class="btn btn-outline-light btn-sm">
                            Perfil
                        </a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-outline-light btn-sm">
                                <i class="bi bi-box-arrow-right me-1"></i>Sair
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
