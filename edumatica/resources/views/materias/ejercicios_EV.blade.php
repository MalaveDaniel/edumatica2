@extends('layouts.plantilla_ejercicio')

@section('title', 'Ejercicios Espacios vectoriales ')

@section('content')

<div class="text-white">

    <h1 class="text-center align-middle object-center ">aca estan todas las operaciones de la primera evaluacion</h1>

    <br>
    <br>

    <div class="">
        <h2 class="text-center align-middle object-center ">primer ejercicio</h2>
    <img src="{{ asset('imagenes/ejercicio1_EV.png') }}" alt="">
    
    

    <h2 class="text-center align-middle object-center ">segundo ejercicio</h2>
    <img src="{{ asset('imagenes/ejercicio2_EV.png') }}" alt="">
    
    

    <h2 class="text-center align-middle object-center ">tercer ejercicio</h2>
    <img src="{{ asset('imagenes/ejercicio3_EV.png') }}" alt="">
    
    
    
    <h2 class="text-center align-middle object-center ">cuarto ejercicio</h2>
    <div >
        
        <img src="{{ asset('imagenes/ejercicio4_EV.png') }}" alt="">
    </div>
    
    <h2 class="text-center align-middle object-center ">quinto ejercicio</h2>
    <div >
        <img  src="{{ asset('imagenes/ejercicio5_EV.png') }}" alt="">
    </div>
    
    
    
    
    <h2 class="text-center align-middle object-center ">sexto ejercicio</h2>
    <img src="{{ asset('imagenes/ejercicio6_EV.png') }}" alt="">
    
    
    
    <h2 class="text-center align-middle object-center ">septimo ejercicio</h2>
    <img src="{{ asset('imagenes/ejercicio7_EV.png') }}" alt="">
    
    
    
    <h2 class="text-center align-middle object-center ">octavo ejercicio</h2>
    <img src="{{ asset('imagenes/ejercicio8_EV.png') }}" alt="">

    
    

    <h2 class="text-center align-middle object-center ">noveno ejercicio</h2>
    <img src="{{ asset('imagenes/ejercicio9_EV.png') }}" alt="">

    
    
    </div>
    

    <div class="text-center align-middle object-center ">
        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('EV')}}">Espacios vectoriales</a></li>
            <li><a href="{{route("reEV")}}">Respuestas Espacios vectoriales</a></li>
                
            </ul>
        </nav>
    </div>
</div>
        

@endsection
