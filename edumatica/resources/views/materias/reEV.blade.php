@extends('layouts.plantilla_respuesta')

@section('title', 'Respuestas de los ejercicios de Espacios vectoriales')

@section('content')

<header>
        <h1>aca estan las respuestas de los ejercicios de Espacios vectoriales</h1>

        <br>
        <br>

        <h2>primer respuesta</h2>
        <img src="{{ asset('imagenes/respuesta1_EV.png') }}" alt="">
        <br>
        <br>

        <h2>segundo respuesta</h2>
        <img src="{{ asset('imagenes/respuesta2_EV.png') }}" alt="">
        <br>
        <br>

        <h2>tercer respuesta</h2>
        <img src="{{ asset('imagenes/respuesta3_EV.png') }}" alt="">
        <br>
        <br>
        
        <h2>cuarto respuesta</h2>
        <img src="{{ asset('imagenes/respuesta4_EV.png') }}" alt="">
        <br>
        <br>
        
        <h2>quinto respuesta</h2>
        <img src="{{ asset('imagenes/respuesta5_EV.png') }}" alt="">
        <br>
        <br>
        
        <h2>sexto respuesta</h2>
        <img src="{{ asset('imagenes/respuesta6_EV.png') }}" alt="">
        <br>
        <br>
        
        <h2>septimo respuesta</h2>
        <img src="{{ asset('imagenes/respuesta7_EV.png') }}" alt="">
        <br>
        <br>
        
        <h2>octavo respuesta</h2>
        <img src="{{ asset('imagenes/respuesta8_EV.png') }}" alt="">

        <br>
        <br>

        <h2>noveno respuesta</h2>
        <img src="{{ asset('imagenes/respuesta9_EV.png') }}" alt="">

        <br>
        <br>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('EV')}}">Espacios vectoriales</a></li>
            <li><a href="{{route('ejercicios_EV')}}">ejercicios de Espacios vectoriales</a></li>
                
            </ul>
        </nav>
</header>
@endsection
