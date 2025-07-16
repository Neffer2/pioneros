<div class="main-home-container">
    {{-- <div class="logout-btn">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" title="Cerrar sesión">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </form>
    </div> --}}
    <img class="pioneros-logo-about" src="{{ asset('assets/main-pioneros-logo.png') }}" alt="">
    <div class="home-menu-container">
        <div class="menu-grid">
            <div class="menu-top">
                <a href="{{ route('about') }}" class="menu-item">
                    <img src="{{ asset('assets/menu-info.png') }}" alt="¿Qué es P1oneros?">
                    <span>¿Qué es P1oneros?</span>
                </a>
                <a href="{{ route('cronograma') }}" class="menu-item">
                    <img src="{{ asset('assets/menu-cronograma.png') }}" alt="Cronograma">
                    <span>Cronograma</span>
                </a>
                <a href="{{ route('ranking') }}" class="menu-item">
                    <img src="{{ asset('assets/menu-ranking.png') }}" alt="Ranking AC">
                    <span>Ranking</span>
                </a>
            </div>
            <div class="menu-bottom">
                <a href="{{ route('premios') }}" class="menu-item">
                    <img src="{{ asset('assets/menu-premios.png') }}" alt="Premios">
                    <span>Premios</span>
                </a>
                <a href="{{ asset('assets/legal/Terminos_y_Condiciones_Concurso_Flagship.pdf') }}" class="menu-item"
                    target="_blank">
                    <img src="{{ asset('assets/menu-tyc.png') }}" alt="T&C">
                    <span>T&C</span>
                </a>

                @if (Auth::user()->rol_id == 1)
                    <a href="{{ route('importar') }}" class="menu-item">
                        <img src="{{ asset('assets/menu-tyc.png') }}" alt="T&C">
                        <span>IMPORTAR</span>
                    </a>
                @endif
            </div>
        </div>
    </div>
    <img class="fill-with-mobil-logo" src="{{ asset('assets/fill-with-mobil.png') }}" alt="">
    @livewire('footer-component')
</div>
