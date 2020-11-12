@extends('layouts.plantilla_respuesta')

@section('title', 'Respuestas de los ejercicios de Determinantes')

@section('content')

<header>
        <h1>aca estan las respuestas de los ejercicios de Determinantes</h1>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('Det')}}">determinantes</a></li>
            <li><a href="{{route('EDet')}}">ejercicios de determinantes</a></li>
                
            </ul>
        </nav>
</header>
@endsection


