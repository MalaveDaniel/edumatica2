@extends('layouts.plantilla_respuesta')

@section('title', 'Respuestas de los ejercicios de Sistema de ecuaciones lineales')

@section('content')

<div class="container">
    
    <div class="">
        <h1 class="text-center align-middle object-center">aca estan las respuestas de los ejercicios de Sistema de ecuaciones lineales</h1>

        <br>
        <br>


        <div class="grid grid-cols-3 text-center inline-block align-middle object-center sm:object-top md:object-right lg:object-bottom xl:object-left object-none object-right-top w-50 h-50">
            <h2>primera respuesta </h2>
            <img src="{{ asset('imagenes/respuesta1-1_Sel.png') }}" alt="">
            <br>
            <img src="{{ asset('imagenes/respuesta1-2_Sel.png') }}" alt="">
            <br>
            <img src="{{ asset('imagenes/respuesta1-3_Sel.png') }}" alt="">

    
            <h2>segunda respuesta </h2>
            <img src="{{ asset('imagenes/respuesta2-1_Sel.png') }}" alt="">
            <br>
            <img src="{{ asset('imagenes/respuesta2-2_Sel.png') }}" alt="">
            <br>
            <img src="{{ asset('imagenes/respuesta2-3_Sel.png') }}" alt="">
            <br>
            <br>
    
    
            
        </div> 
    </div>
        
</div>
    </div>
           
<div class="text-center align-middle object-center">
    <nav>
        <ul>
        <li><a href="{{route("dashboard")}}">home</a></li>
        <li><a href="{{route('Sel')}}">Sistema de ecuaciones lineales</a></li>
        <li><a href="{{route('ESel')}}">ejercicios de Sistema de ecuaciones lineales</a></li>
            
        </ul>
    </nav>
</div>


@endsection
