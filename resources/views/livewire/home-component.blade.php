<div class="main-home-container">
    {{-- @livewire('import-data', key(Auth::user()->id)) --}}
    <div class="logout-btn">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" title="Cerrar sesión">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </form>
    </div>
    <div class="home-menu-container">
        <div class="menu-grid">
            <div class="menu-top">
                <a href="" class="menu-item">
                    <img src="{{ asset('assets/menu-info.png') }}" alt="¿Qué es P1ONEROS?">
                    <span>¿QUÉ ES P1ONEROS?</span>
                </a>
                <a href="" class="menu-item">
                    <img src="{{ asset('assets/menu-cronograma.png') }}" alt="Cronograma">
                    <span>CRONOGRAMA</span>
                </a>
                <a href="" class="menu-item">
                    <img src="{{ asset('assets/menu-ranking.png') }}" alt="Ranking AC">
                    <span>RANKING AC</span>
                </a>
            </div>
            <div class="menu-bottom">
                <a href="" class="menu-item">
                    <img src="{{ asset('assets/menu-premios.png') }}" alt="Premios">
                    <span>PREMIOS</span>
                </a>
                <a href="" class="menu-item">
                    <img src="{{ asset('assets/menu-tyc.png') }}" alt="T&C">
                    <span>T&C</span>
                </a>
            </div>
        </div>
    </div>
</div>
