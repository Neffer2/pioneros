@extends('layouts.main')
    @section('title', '¿Que es p1oneros?')
    @section('content')
        @livewire('import-data', key(Auth::user()->id))
    @endsection
