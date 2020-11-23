@extends('layouts.plantilla_ejercicio')

@section('title', 'Ejercicios Operaciones con matrices')

@section('content')

<div class="text-white">

        <h1 class="text-center align-middle object-center ">aca estan todas las operaciones de la segunda evaluacion</h1>

        <br>
        <br>

        <H2 class="text-center align-middle object-center ">Método de resolución</H2>

        <br>
        <br>

        <p class="text-center align-middle object-center ">El método de Gauss-Jordan utiliza operaciones con matrices para resolver sistemas de ecuaciones de n número de variables.</p>

        <br>
        <br>

        <p class="text-center align-middle object-center ">Para aplicar este método solo hay que recordar que cada operación que se realice se aplicará a toda la fila o a toda la columna en su caso.</p>

        <br>
        <br>

        <p class="text-center align-middle object-center ">El objetivo de este método es tratar de convertir la parte de la matriz donde están los coeficientes de las variables en una matriz identidad. Esto se logra mediante simples operaciones de suma, resta y multiplicación.</p>

        <br>
        <br>
                <img src="{{ asset('imagenes/resolucion_OM.png') }}" alt="">
        <br>
        <br>

        <div class="">

                <h2>primer ejercicio</h2>
                <img src="{{ asset('imagenes/ejercicio1_OM.png') }}" alt="">
                <br>
                <br>
        
                <h2>segundo ejercicio</h2>
                <img src="{{ asset('imagenes/ejercicio2_OM.png') }}" alt="">
                <br>
                <br>
        
                <h2>tercer ejercicio</h2>
                <img src="{{ asset('imagenes/ejercicio3_OM.png') }}" alt="">
                <br>
                <br>
                
                <h2>cuarto ejercicio</h2>
                <img src="{{ asset('imagenes/ejercicio4_OM.png') }}" alt="">
                <br>
                <br>
                
                <h2>quinto ejercicio</h2>
                <img src="{{ asset('imagenes/ejercicio5_OM.png') }}" alt="">
                <br>
                <br>
                
                <h2>sexto ejercicio</h2>
                <img src="{{ asset('imagenes/ejercicio6_OM.png') }}" alt="">
                <br>
                <br>
                
                <h2>septimo ejercicio</h2>
                <img src="{{ asset('imagenes/ejercicio7_OM.png') }}" alt="">
                <br>
                <br>
                
                <h2>octavo ejercicio</h2>
                <img src="{{ asset('imagenes/ejercicio8_OM.png') }}" alt="">
        </div>



        
<div class="text-center align-middle object-center ">

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('OM')}}">Operaciones con matrices</a></li>
            <li><a href="{{route("REOM")}}">Respuestas Operaciones con matrices</a></li>
                
            </ul>
        </nav>
</div>
</div>

@endsection
