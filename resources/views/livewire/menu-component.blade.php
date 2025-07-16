<div>
    <div class="navbar-container">
        <button class="navbar-toggle">
            <div class="navbar-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        
        <div class="navbar-overlay"></div>
        
        <div class="navbar-panel">
            <button class="navbar-close">
                <i class="fas fa-times"></i>
            </button>
            
            <nav class="navbar-nav">
                <a href="{{ route('dashboard') }}" class="nav-link">Inicio</a>
                <a href="{{ route('about') }}" class="nav-link">¿Qué es P1oneros?</a>
                <a href="{{ route('cronograma') }}" class="nav-link">Cronograma</a>
                <a href="{{ route('ranking') }}" class="nav-link">Ranking</a>
                <a href="{{ route('premios') }}" class="nav-link">Premios</a>
                <a href="{{ asset('assets/legal/Terminos_y_Condiciones_Concurso_Flagship.pdf') }}" target="_blank" class="nav-link">T&C</a>
                
                @if (Auth::user()->rol_id == 1)
                    <a href="{{ route('importar') }}" class="nav-link">Importar Datos</a>
                @endif
                
                <form method="POST" action="{{ route('logout') }}" style="margin-top: auto;">
                    @csrf
                    <button type="submit" class="nav-link logout" style="width: 100%; text-align: left; background: none; border: none;">
                        <i class="fas fa-sign-out-alt"></i>
                        Cerrar sesión
                    </button>
                </form>
            </nav>
        </div>
    </div>
</div>
