@extends('layouts.plantilla_ejercicio')

@section('title', 'Ejercicios Sistema de ecuaciones lineales')

@section('content')

<header>
        <h1>aca estan todas las operaciones de la ultima evaluacion</h1>
        <br>
        <br>

        <h2>metodo de resolucion</h2>

        <p>La regla de Cramer proporciona la solución de sistemas de ecuaciones lineales compatibles determinados (con una única solución) mediante el cálculo de determinantes. Se trata de un método muy rápido para resolver sistemas, sobre todo, para sistemas de dimensión 2x2 y 3x3.</p>

        <br>
        <br>

        <h2>Ejercicios</h2>

        <br>
        <br>

        <h2>primer ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio1_Sel.png') }}" alt="">
        <br>
        <br>

        <h2>segundo ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio2_Sel.png') }}" alt="">
        <br>
        <br>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('Sel')}}">Sistema de ecuaciones lineales</a></li>
            <li><a href="{{route("RESel")}}">Respuestas Sistema de ecuaciones lineales</a></li>
                
            </ul>
        </nav>
</header>
@endsection
