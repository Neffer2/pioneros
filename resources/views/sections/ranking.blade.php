{{-- filepath: c:\laragon\www\pioneros\resources\views\sections\ranking.blade.php --}}
@extends('layouts.main')
@section('title', 'Ranking')
@section('content')
@php
    $rankings = [
        [
            'key' => 'crecimiento_flagship',
            'label' => 'Crecimiento % Flagship',
            'data' => $crecimiento_flagship,
            'suf' => '%'
        ],
        [
            'key' => 'crecimiento_galones',
            'label' => 'Crecimiento Galones',
            'data' => $crecimiento_galones,
            'suf' => '%'
        ],
        [
            'key' => 'penetracion_flagship',
            'label' => 'Penetración Flagship',
            'data' => $penetracion_flagship,
            'suf' => '%'
        ],
        [
            'key' => 'mix_flagship',
            'label' => 'Mix Flagship',
            'data' => $mix_flagship,
            'suf' => '%'
        ],
        [
            'key' => 'pops_flagship',
            'label' => 'POPs Flagship',
            'data' => $pops_flagship,
            'suf' => '%'
        ],
    ];
@endphp

<div class="ranking-container">
    <a class="back-button" href="{{ route('dashboard') }}">
        <i class="fa fa-arrow-left" aria-hidden="true" style="margin-right:8px;"></i> REGRESAR
    </a>
    <img class="pioneros-logo-about" src="{{ asset('assets/main-pioneros-logo.png') }}" alt="">

    {{-- Botones para cambiar ranking --}}
    <div class="ranking-switcher">
        @foreach($rankings as $i => $ranking)
            <button
                class="ranking-btn"
                data-ranking="{{ $ranking['key'] }}"
                @if($i === 0) id="active-ranking-btn" @endif
            >
                {{ $ranking['label'] }}
            </button>
        @endforeach
    </div>

    <div class="ranking-info">
        <div class="ranking-left-container">
            <img src="{{ asset('assets/ranking.png') }}" alt="">
            @foreach($rankings as $i => $ranking)
                @php
                    $top3 = $ranking['data']->take(3);
                @endphp
                <div class="podium-names ranking-section"
                    id="podium-{{ $ranking['key'] }}"
                    style="display: {{ $i === 0 ? 'flex' : 'none' }};">
                    <div class="podium-number">
                        <p>{{ $top3[2]->nombre ?? 'Agente' }}</p>
                        <p><b>{{ $top3[2]->{$ranking['key']} ?? '-' }}{{ $ranking['suf'] }}</b></p>
                    </div>
                    <div class="podium-number">
                        <p>{{ $top3[0]->nombre ?? 'Agente' }}</p>
                        <p><b>{{ $top3[0]->{$ranking['key']} ?? '-' }}{{ $ranking['suf'] }}</b></p>
                    </div>
                    <div class="podium-number">
                        <p>{{ $top3[1]->nombre ?? 'Agente' }}</p>
                        <p><b>{{ $top3[1]->{$ranking['key']} ?? '-' }}{{ $ranking['suf'] }}</b></p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="ranking-right-container">
            @foreach($rankings as $i => $ranking)
                @php
                    $resto = $ranking['data']->slice(3, 7); // Del 4 al 10 (7 elementos)
                @endphp
                <div class="ranking-section" id="table-{{ $ranking['key'] }}" style="display: {{ $i === 0 ? 'block' : 'none' }};">
                    <h4 class="ranking-title">RANKINGS AC</h4>
                    <table class="ranking-table">
                        <tbody>
                            @foreach ($resto as $j => $agente)
                                <tr>
                                    <td>{{ $j + 4 }}</td>
                                    <td><strong>{{ $agente->nombre ?? 'Agente' }}</strong></td>
                                    <td>
                                        <b>{{ $agente->{$ranking['key']} }}{{ $ranking['suf'] }}</b>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    </div>
    <img class="fill-with-mobil-logo" src="{{ asset('assets/fill-with-mobil.png') }}" alt="">
</div>

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
        });
    });
</script>
@endsection