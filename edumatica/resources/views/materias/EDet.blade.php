@extends('layouts.plantilla_ejercicio')

@section('title', 'Ejercicios determinantes')

@section('content')

<header>
        <h1>aca estan todas las operaciones de la tercera evaluacion</h1>

        <br>
    <br>

        <p></p>

        <br>
        <br>

        
        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('Det')}}">determinantes</a></li>
            <li><a href="{{route("REDet")}}">Respuestas ejercicios Determinantes</a></li>
                
            </ul>
        </nav>
</header>

@endsection

    