@extends('layouts.plantilla_ejercicio')

@section('title', 'Ejercicios Sistema de ecuaciones lineales')

@section('content')

<header>
        <h1>aca estan todas las operaciones de la ultima evaluacion</h1>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('Sel')}}">Sistema de ecuaciones lineales</a></li>
            <li><a href="{{route("RESel")}}">Respuestas Sistema de ecuaciones lineales</a></li>
                
            </ul>
        </nav>
</header>
@endsection
