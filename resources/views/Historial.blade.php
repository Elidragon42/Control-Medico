
@extends('layouts.layouts')

@section('title', 'Historial')

@section('content')
    <h1>Aquí estará el Historial</h1>
    <li><a href="{{ route('procedimientos.create') }}">Ir a Procedimientos</a></li>
    <li></li><a href="{{ route('Welcome') }}">Ir a Welcome</a></li>
@endsection
