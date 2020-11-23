@extends('layouts.plantilla_ejercicio')

@section('title', 'Ejercicios determinantes')

@section('content')

<div class="container">
        <div class="text-white" >
                <h1 class="text-center align-middle object-center">aca estan todas las operaciones de la tercera evaluacion</h1>
        
                <br>
                <br>
        
                <h2 class="text-center align-middle object-center">ejercicios</h2>
        
                <br>
                <br>

                <div class="grid grid-cols-4">
                        <h2>primer ejercicio</h2>
                        <img src="{{ asset('imagenes/ejercicio1_Det.png') }}" alt="">
                        
                
                        <h2>segundo ejercicio</h2>
                        <img src="{{ asset('imagenes/ejercicio2_Det.png') }}" alt="">
                        
                
                        <h2>tercer ejercicio</h2>
                        <img src="{{ asset('imagenes/ejercicio3_Det.png') }}" alt="">
                        
                        
                        <h2>cuarto ejercicio</h2>
                        <img src="{{ asset('imagenes/ejercicio4_Det.png') }}" alt="">
                        
                        
                        <h2>quinto ejercicio</h2>
                        <img src="{{ asset('imagenes/ejercicio5_Det.png') }}" alt="">
                        
                </div>
        
                
    </div>
        
</div>
        <div class="text-center align-middle object-center text-white">
                <nav>
                        <ul>
                        <li><a href="{{route("dashboard")}}">home</a></li>
                        <li><a href="{{route('Det')}}">determinantes</a></li>
                        <li><a href="{{route("REDet")}}">Respuestas ejercicios Determinantes</a></li>
                            
                        </ul>
                    </nav>
        </div>
        


@endsection

    