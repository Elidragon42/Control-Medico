
@extends('layouts.layouts')

@section('title', 'procedimientos')

@section('content')
    <h1>Aqui crearas los Procedimiinetos</h1>
    <li><a href="{{ route('historial') }}">Ir a Historial</a></li>
    <li><a href="{{ route('Welcome') }}">Ir a welcome</a></li>
    <br>
    <br>

    <h1>Añadir un nuevo procedimiento</h1>

    <form action="#">
        <div>
            <label for="nombre">Nombre del procedimiento: </label>
            <input type="text" name="nombre">
        </div>

        <div>
            <label for="nombre">Descripcion del procedimiento: </label>
            <input type="text" name="nombre">
        </div>

        <div>
            <input type="submit" value="Confirmar">
        </div>

    </form>
@endsection
