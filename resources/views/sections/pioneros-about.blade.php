@extends('layouts.main')
@section('title', '¿Que es p1oneros?')
@section('content')
    <div class="about-container">

        <img class="pioneros-logo-about" src="{{ asset('assets/main-pioneros-logo.png') }}" alt="">
        <a class="back-button" href="{{ route('dashboard') }}">
            <i class="fa fa-arrow-left" aria-hidden="true" style="margin-right:8px;"></i> REGRESAR
        </a>

        <div class="about-info">

            <div class="about-left-container">
                <img src="{{ asset('assets/about-left-image.png') }}" alt="">
            </div>
            <div class="about-right-container">
                <h1>¿Qué es Pioneros?</h1>
                <p>
                    Una iniciativa de Mobil Industria para reconocer el trabajo, las acciones y los resultados obtenidos por
                    las duplas de los agentes comerciales (ingeniero + asesor) con la venta y uso de productos sintéticos
                    Flagship en los equipos y/o vehículos de sus Clientes B2B, durante el segundo semestre del 2025 hasta el
                    primer semestre del 2026.

                </p>
            </div>
        </div>

        <img class="fill-with-mobil-logo" src="{{ asset('assets/fill-with-mobil.png') }}" alt="">

    </div>
@endsection
