
@extends('layouts.layouts')

@section('title', 'Inicio')

@section('content')
    <h1> Estas en welcome Zzz</h1>
    <li><a href="{{ route('historial') }}">Ir a Historial</a></li>
    <li><a href="{{ route('procedimientos.create') }}">Ir a Procedimientos</a></li>
@endsection
