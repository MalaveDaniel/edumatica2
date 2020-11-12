@extends('layouts.plantilla_respuesta')

@section('title', 'Respuestas de los ejercicios de Espacios vectoriales')

@section('content')

<header>
        <h1>aca estan las respuestas de los ejercicios de Espacios vectoriales</h1>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('EV')}}">Espacios vectoriales</a></li>
            <li><a href="{{route('ejercicios_EV')}}">ejercicios de Espacios vectoriales</a></li>
                
            </ul>
        </nav>
</header>
@endsection
