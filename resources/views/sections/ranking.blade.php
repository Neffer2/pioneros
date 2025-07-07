@extends('layouts.main')
@section('title', 'Ranking')
@section('content')
    <div class="ranking-container">
        <img class="pioneros-logo-about" src="{{ asset('assets/main-pioneros-logo.png') }}" alt="">
        <div class="ranking-info">
            <div class="ranking-left-container">
                <div class="ranking-left-content">
                    <h1>Ranking</h1>
                </div>
            </div>
            <div class="ranking-right-container">
                <h4>General</h4>
                <h4>Crecimiento % en Flagship </h4>
            </div>
        </div>
        <img class="fill-with-mobil-logo" src="{{ asset('assets/fill-with-mobil.png') }}" alt="">
        {{-- <a href="{{ route('dashboard') }}">Volver</a> --}}
    </div>
@endsection
