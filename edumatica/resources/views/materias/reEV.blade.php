@extends('layouts.plantilla_respuesta')

@section('title', 'Respuestas de los ejercicios de Espacios vectoriales')

@section('content')

<div class="container">
        <div class="text-white">
                <h1 class="text-center align-middle object-center ">aca estan las respuestas de los ejercicios de Espacios vectoriales</h1>

                <br>
                <br>
        
                <div class="grid grid-cols-4">
                        <h2>primera respuesta</h2>
                        <img src="{{ asset('imagenes/respuesta1_EV.png') }}" alt="">


                
                        <h2>segunda respuesta</h2>
                        <img src="{{ asset('imagenes/respuesta2_EV.png') }}" alt="">


                
                        <h2>tercera respuesta</h2>
                        <img src="{{ asset('imagenes/respuesta3_EV.png') }}" alt="">


                        
                        <h2>cuarta respuesta</h2>
                        <img src="{{ asset('imagenes/respuesta4_EV.png') }}" alt="">


                        
                        <h2>quinta respuesta</h2>
                        <img src="{{ asset('imagenes/respuesta5_EV.png') }}" alt="">


                        
                        <h2>sexta respuesta</h2>
                        <img src="{{ asset('imagenes/respuesta6_EV.png') }}" alt="">


                        
                        <h2>septima respuesta</h2>
                        <img src="{{ asset('imagenes/respuesta7_EV.png') }}" alt="">


                        
                        <h2>octava respuesta</h2>
                        <img src="{{ asset('imagenes/respuesta8_EV.png') }}" alt="">
                


                
                        <h2>novena respuesta</h2>
                        <img src="{{ asset('imagenes/respuesta9_EV.png') }}" alt="">
                


                </div>
                
                <div class="text-center align-middle object-center ">
                
                        <nav>
                            <ul>
                            <li><a href="{{route("dashboard")}}">home</a></li>
                            <li><a href="{{route('EV')}}">Espacios vectoriales</a></li>
                            <li><a href="{{route('ejercicios_EV')}}">ejercicios de Espacios vectoriales</a></li>
                                
                            </ul>
                        </nav>
                </div>
    </div>
        
</div>


@endsection
