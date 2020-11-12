@extends('layouts.plantilla_ejercicio')

@section('title', 'Ejercicios Espacios vectoriales ')

@section('content')

<header>
        <h1>aca estan todas las operaciones de la primera evaluacion</h1>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('EV')}}">Espacios vectoriales</a></li>
            <li><a href="{{route("reEV")}}">Respuestas Espacios vectoriales</a></li>
                
            </ul>
        </nav>
</header>
@endsection
