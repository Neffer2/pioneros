{{-- filepath: c:\laragon\www\pioneros\resources\views\sections\ranking.blade.php --}}
@extends('layouts.main')
@section('title', 'Ranking')
@section('content')
    <div class="ranking-container">
        <img class="pioneros-logo-about" src="{{ asset('assets/main-pioneros-logo.png') }}" alt="">
        <div class="ranking-info">
            <div class="ranking-left-container">
                <img src="{{ asset('assets/ranking.png') }}" alt="">
            </div>
            <div class="ranking-right-container">
                <h4>RANKINGS AC</h4>
                <table class="ranking-table">
                    <tbody>
                        @foreach ($crecimiento_flagship as $i => $agente)
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td><strong>{{ $agente->nombre ?? 'Agente' }}</strong></td>
                                <td>{{ $agente->crecimiento_flagship }}%</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- <h4>Ranking: Crecimiento Galones</h4>
                <ul>
                    @foreach ($crecimiento_galones as $agente)
                        <li>
                            {{ $agente->nombre ?? 'Agente' }}: {{ $agente->crecimiento_galones }}
                        </li>
                    @endforeach
                </ul>

                <h4>Ranking: Penetración Flagship</h4>
                <ul>
                    @foreach ($penetracion_flagship as $agente)
                        <li>
                            {{ $agente->nombre ?? 'Agente' }}: {{ $agente->penetracion_flagship }}%
                        </li>
                    @endforeach
                </ul>

                <h4>Ranking: Mix Flagship</h4>
                <ul>
                    @foreach ($mix_flagship as $agente)
                        <li>
                            {{ $agente->nombre ?? 'Agente' }}: {{ $agente->mix_flagship }}
                        </li>
                    @endforeach
                </ul>

                <h4>Ranking: POPs Flagship</h4>
                <ul>
                    @foreach ($pops_flagship as $agente)
                        <li>
                            {{ $agente->nombre ?? 'Agente' }}: {{ $agente->pops_flagship }}
                        </li>
                    @endforeach
                </ul> --}}
            </div>
        </div>
        <img class="fill-with-mobil-logo" src="{{ asset('assets/fill-with-mobil.png') }}" alt="">
    </div>
@endsection
