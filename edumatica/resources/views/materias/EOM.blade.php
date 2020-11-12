@extends('layouts.plantilla_ejercicio')

@section('title', 'Ejercicios Operaciones con matrices')

@section('content')

<header>
        <h1>aca estan todas las operaciones de la segunda evaluacion</h1>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('OM')}}">Operaciones con matrices</a></li>
            <li><a href="{{route("REOM")}}">Respuestas Operaciones con matrices</a></li>
                
            </ul>
        </nav>
</header>
@endsection
