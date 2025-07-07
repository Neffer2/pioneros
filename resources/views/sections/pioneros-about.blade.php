@extends('layouts.main')
@section('title', '¿Que es p1oneros?')
@section('content')
    <div class="about-container">

        <img class="pioneros-logo-about" src="{{ asset('assets/main-pioneros-logo.png') }}" alt="">

        <div class="about-info">
            <a class="back-button" href="{{ route('dashboard') }}">
                <i class="fa fa-arrow-left" aria-hidden="true" style="margin-right:8px;"></i> REGRESAR
            </a>

            <div class="about-left-container">
                <img src="{{ asset('assets/about-left-image.png') }}" alt="">
            </div>
            <div class="about-right-container">
                <h1>¿Qué es Pioneros?</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum.
                </p>
            </div>
        </div>

        <img class="fill-with-mobil-logo" src="{{ asset('assets/fill-with-mobil.png') }}" alt="">

    </div>
@endsection
