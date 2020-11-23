@extends('layouts.plantilla_materia')

@section('title', 'Espacios vectoriales')

@section('content')

<div class="text-white">
    <h1 class="text-center align-middle object-center ">aca puedes ver Espacios vectoriales</h1>

    <br>
    <br>

    <p class="text-center align-middle object-center ">espacio vectorial se utiliza para nombrar a la estructura matemática que se crea a partir de un conjunto no vacío y que cumple con diversos requisitos y propiedades iniciales. Esta estructura surge mediante una operación de suma (interna al conjunto) y una operación de producto entre dicho conjunto y un cuerpo.</p>
        <br>
        <br>
        
        <h2 class="text-center align-middle object-center ">Formula</h2>
        <img src="{{ asset('imagenes/formulas_EV.png') }}" alt="">

        <br>
        <br>
        <img src="{{ asset('imagenes/portada_EV.png') }}" alt="">

        <br>
        <br>
    <div class="text-center align-middle object-center ">
        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('ejercicios_EV')}}">Ejercicios Espacios vectoriales</a></li>
                
            </ul>
        </nav>
    </div>
</div>
        
       
@endsection
