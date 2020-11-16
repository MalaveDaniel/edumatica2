@extends('layouts.plantilla_respuesta')

@section('title', 'Respuestas de los ejercicios de Determinantes')

@section('content')

<header>
        <h1>aca estan las respuestas de los ejercicios de Determinantes</h1>

        <br>
        <br>

        <h2>primera respuesta</h2>
        <img src="{{ asset('imagenes/respuesta1_Det.png') }}" alt="">
        <br>
        <br>

        <h2>segunda respuesta</h2>
        <img src="{{ asset('imagenes/respuesta2_Det.png') }}" alt="">
        <br>
        <br>

        <h2>tercera respuesta</h2>
        <img src="{{ asset('imagenes/respuesta3_Det.png') }}" alt="">
        <br>
        <br>
        
        <h2>cuarta respuesta</h2>
        <img src="{{ asset('imagenes/respuesta4_Det.png') }}" alt="">
        <br>
        <br>
        
        <h2>quinta respuesta</h2>
        <img src="{{ asset('imagenes/respuesta5_Det.png') }}" alt="">
        <br>
        <br>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('Det')}}">determinantes</a></li>
            <li><a href="{{route('EDet')}}">ejercicios de determinantes</a></li>
                
            </ul>
        </nav>
</header>
@endsection


