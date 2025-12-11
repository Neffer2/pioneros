{{-- filepath: c:\laragon\www\pioneros\resources\views\sections\ranking.blade.php --}}
@extends('layouts.main')
@section('title', 'Ranking')
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css" />
@endpush
@section('content')
    @php
        $rankings = [
            [
                'key' => 'total_puntos',
                'label' => 'Ranking General',
                'data' => $general,
                'suf' => '',
            ],
            [
                'key' => 'crecimiento_flagship',
                'label' => 'Crecimiento % Flagship',
                'data' => $crecimiento_flagship,
                'suf' => '%',
            ],
            [
                'key' => 'crecimiento_galones',
                'label' => 'Crecimiento Galones',
                'data' => $crecimiento_galones,
                'suf' => '',
            ],
            [
                'key' => 'penetracion_flagship',
                'label' => 'Penetración Flagship',
                'data' => $penetracion_flagship,
                'suf' => '',
            ],
            [
                'key' => 'mix_flagship',
                'label' => 'Mix Flagship',
                'data' => $mix_flagship,
                'suf' => '',
            ],
            [
                'key' => 'pops_flagship',
                'label' => 'POPs Flagship',
                'data' => $pops_flagship,
                'suf' => '',
            ],
        ];
    @endphp

    <div class="ranking-container">
        <img class="pioneros-logo-about" src="{{ asset('assets/main-pioneros-logo.png') }}" alt="">
        <img class="fill-with-mobil-logo" src="{{ asset('assets/fill-with-mobil.png') }}" alt="">

        {{-- Botones para cambiar ranking --}}
        <div class="ranking-switcher">
            @foreach ($rankings as $i => $ranking)
                <button class="ranking-btn" data-ranking="{{ $ranking['key'] }}"
                    @if ($i === 0) id="active-ranking-btn" @endif>
                    {{ $ranking['label'] }}
                </button>
            @endforeach
        </div>

        <div class="ranking-info">
            <p style="text-align: center; text-shadow: 2px 2px 4px #000000; font-size: 54px;">
                <span class="ranking-title" style="color: white">Próximamente rankings <br> 20 Enero del 2026.</span>
            </p>
            {{-- <div class="ranking-left-container">
                <img src="{{ asset('assets/ranking.png') }}" alt="">
                @foreach ($rankings as $i => $ranking)
                    @php
                        $top3 = $ranking['data']->take(3);
                    @endphp
                    <div class="podium-names ranking-section" id="podium-{{ $ranking['key'] }}"
                        style="display: {{ $i === 0 ? 'flex' : 'none' }};">
                        <div class="podium-number">
                            <p data-tippy-content="{{ $top3[2]->descripcion ?? 'Agente' }}">
                                {{ strtolower($top3[2]->descripcion ?? 'Agente') }}</p>
                            <p><b>{{ $top3[2]->{$ranking['key']} ?? '-' }}{{ $ranking['suf'] }}</b></p>
                        </div>
                        <div class="podium-number">
                            <p data-tippy-content="{{ $top3[0]->descripcion ?? 'Agente' }}">
                                {{ strtolower($top3[0]->descripcion ?? 'Agente') }}</p>
                            <p><b>{{ $top3[0]->{$ranking['key']} ?? '-' }}{{ $ranking['suf'] }}</b></p>
                        </div>
                        <div class="podium-number">
                            <p data-tippy-content="{{ $top3[1]->descripcion ?? 'Agente' }}">
                                {{ strtolower($top3[1]->descripcion ?? 'Agente') }}</p>
                            <p><b>{{ $top3[1]->{$ranking['key']} ?? '-' }}{{ $ranking['suf'] }}</b></p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="ranking-right-container">
                @foreach ($rankings as $i => $ranking)
                    @php
                        $resto = $ranking['data']->slice(3); // Del puesto 4 en adelante
                    @endphp
                    <div class="ranking-section" id="table-{{ $ranking['key'] }}"
                        style="display: {{ $i === 0 ? 'block' : 'none' }};">
                        <h4 class="ranking-title">Ranking</h4>
                        <div class="ranking-table-container">
                            <table class="ranking-table">
                                <tbody>
                                    @foreach ($resto as $j => $agente)
                                        <tr>
                                            <td>{{ $j + 1 }}</td>
                                            <td><strong>{{ strtolower($agente->descripcion) ?? 'Agente' }}</strong></td>
                                            <td>
                                                <b>{{ number_format($agente->{$ranking['key']}, 0) }}{{ $ranking['suf'] }}</b>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>
    </div>

    @livewire('footer-component')

    <script>
        document.querySelectorAll('.ranking-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Oculta todas las secciones
                document.querySelectorAll('.ranking-section').forEach(sec => sec.style.display = 'none');
                // Quita el estilo activo de todos los botones
                document.querySelectorAll('.ranking-btn').forEach(b => b.style.background = '');
                // Muestra la sección seleccionada
                document.getElementById('podium-' + this.dataset.ranking).style.display = 'flex';
                document.getElementById('table-' + this.dataset.ranking).style.display = 'block';
                // Marca el botón activo
                this.style.background = '#3b5ca8';

                // Cambiar el fondo según el ranking seleccionado
                const container = document.querySelector('.ranking-info');
                if (this.dataset.ranking === 'total_puntos') {
                    container.style.backgroundImage = "url('../assets/fondo-ranking-general.png')";
                } else {
                    container.style.backgroundImage = "url('../assets/fondo-ranking-secundario.png')";
                }
            });
        });
    </script>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <script>
        tippy('[data-tippy-content]', {
            placement: 'bottom',
            arrow: true,
            theme: 'light-border',
            delay: [200, 0], // [entrada, salida] en milisegundos
            duration: [200, 200],
            animation: 'shift-away'
        });
    </script>
@endsection
