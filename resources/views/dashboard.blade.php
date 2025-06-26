@extends('layouts.main')
    @section('title', 'Dashboard')
    @section('content')
        @livewire('import-data', key(Auth::user()->id))
    @endsection
