@extends('layouts.plantilla_ejercicio')

@section('title', 'Ejercicios Espacios vectoriales ')

@section('content')

<header>
        <h1>aca estan todas las operaciones de la primera evaluacion</h1>

        <br>
        <br>

        <h2>primer ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio1_EV.png') }}" alt="">
        <br>
        <br>

        <h2>segundo ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio2_EV.png') }}" alt="">
        <br>
        <br>

        <h2>tercer ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio3_EV.png') }}" alt="">
        <br>
        <br>
        
        <h2>cuarto ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio4_EV.png') }}" alt="">
        <br>
        <br>
        
        <h2>quinto ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio5_EV.png') }}" alt="">
        <br>
        <br>
        
        <h2>sexto ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio6_EV.png') }}" alt="">
        <br>
        <br>
        
        <h2>septimo ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio7_EV.png') }}" alt="">
        <br>
        <br>
        
        <h2>octavo ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio8_EV.png') }}" alt="">

        <br>
        <br>

        <h2>noveno ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio9_EV.png') }}" alt="">

        <br>
        <br>

        
        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('EV')}}">Espacios vectoriales</a></li>
            <li><a href="{{route("reEV")}}">Respuestas Espacios vectoriales</a></li>
                
            </ul>
        </nav>
</header>
@endsection
