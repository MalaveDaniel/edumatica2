@extends('layouts.plantilla_respuesta')

@section('title', 'Respuestas de los ejercicios de Determinantes')

@section('content')

<div class="container">
    <div class="">
            <h1>aca estan las respuestas de los ejercicios de Determinantes</h1>

            <br>
            <br>

            <div class="grid grid-cols-4">
                    <h2>primera respuesta</h2>
                    <img src="{{ asset('imagenes/respuesta1_Det.png') }}" alt="">
                   
            
                    <h2>segunda respuesta</h2>
                    <img src="{{ asset('imagenes/respuesta2_Det.png') }}" alt="">
                    
            
                    <h2>tercera respuesta</h2>
                    <img src="{{ asset('imagenes/respuesta3_Det.png') }}" alt="">
                   
                    
                    <h2>cuarta respuesta</h2>
                    <img src="{{ asset('imagenes/respuesta4_Det.png') }}" alt="">
                    
                    
                    <h2>quinta respuesta</h2>
                    <img src="{{ asset('imagenes/respuesta5_Det.png') }}" alt="">
                    
            </div>
    
            
    </div>
        
</div>
        

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('Det')}}">determinantes</a></li>
            <li><a href="{{route('EDet')}}">ejercicios de determinantes</a></li>
                
            </ul>
        </nav>

@endsection


