@extends('layouts.plantilla_respuesta')

@section('title', 'Respuestas de los ejercicios de Operaciones con matrices')

@section('content')

<header>
        <h1>aca estan las respuestas de los ejercicios de Operaciones con matrices</h1>

        <br>
        <br>

        <h2>primera respuesta</h2>
        <img src="{{ asset('imagenes/respuesta1_OM.png') }}" alt="">
        <br>
        <br>

        <h2>segunda respuesta</h2>
        <img src="{{ asset('imagenes/respuesta2_OM.png') }}" alt="">
        <br>
        <br>

        <h2>tercera respuesta</h2>
        <img src="{{ asset('imagenes/respuesta3_OM.png') }}" alt="">
        <br>
        <br>
        
        <h2>cuarta respuesta</h2>
        <img src="{{ asset('imagenes/respuesta4_OM.png') }}" alt="">
        <br>
        <br>
        
        <h2>quinta respuesta</h2>
        <img src="{{ asset('imagenes/respuesta5_OM.png') }}" alt="">
        <br>
        <br>
        
        <h2>sexta respuesta</h2>
        <img src="{{ asset('imagenes/respuesta6_OM.png') }}" alt="">
        <br>
        <br>
        
        <h2>septima respuesta</h2>
        <img src="{{ asset('imagenes/respuesta7_OM.png') }}" alt="">
        <br>
        <br>
        
        <h2>octava respuesta</h2>
        <img src="{{ asset('imagenes/respuesta8_OM.png') }}" alt="">

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('OM')}}">Operaciones con matrices</a></li>
            <li><a href="{{route('EOM')}}">ejercicios de Operaciones con matrices</a></li>
                
            </ul>
        </nav>
</header>
@endsection
