@extends('layouts.plantilla_respuesta')

@section('title', 'Respuestas de los ejercicios de Sistema de ecuaciones lineales')

@section('content')

<header>
        <h1>aca estan las respuestas de los ejercicios de Sistema de ecuaciones lineales</h1>

        <br>
        <br>

        <h2>primera respuesta </h2>
        <img src="{{ asset('imagenes/respuesta1-1_Sel.png') }}" alt="">
        <img src="{{ asset('imagenes/respuesta1-2_Sel.png') }}" alt="">
        <img src="{{ asset('imagenes/respuesta1-3_Sel.png') }}" alt="">
        <br>
        <br>

        <h2>segunda respuesta </h2>
        <img src="{{ asset('imagenes/respuesta2-1_Sel.png') }}" alt="">
        <img src="{{ asset('imagenes/respuesta2-2_Sel.png') }}" alt="">
        <img src="{{ asset('imagenes/respuesta2-3_Sel.png') }}" alt="">
        <br>
        <br>


        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('Sel')}}">Sistema de ecuaciones lineales</a></li>
            <li><a href="{{route('ESel')}}">ejercicios de Sistema de ecuaciones lineales</a></li>
                
            </ul>
        </nav>
</header>
@endsection
