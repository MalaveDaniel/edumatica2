@extends('layouts.plantilla_ejercicio')

@section('title', 'Ejercicios determinantes')

@section('content')

<header>
        <h1>aca estan todas las operaciones de la tercera evaluacion</h1>

        <br>
        <br>

        <h2>metodo de resolucion</h2>

        <p>La regla de Sarrus permite calcular el determinante de una matriz de 3×3, introduciendo un método mucho más sencillo e intuitivo. Para poder comprobar el valor de la regla de Sarrus, tomamos una matriz cualquiera de dimensión 3, El cálculo de su determinante se realizaría mediante el producto de sus diagonales principales, restándole el producto de las diagonales inversas. Para aplicar la regla de Sarrus, y resolverla de un modo más visual, deberíamos incluir la fila 1 y 2, como fila 4 y 5 respectivamente. Es importante mantener la fila 1 en la 4ª posición, y la fila 2 en la 5ª. Ya que si las intercambiamos, la Regla de Sarrus no resultará efectiva.</p>

        <br>
        <br>

        <img src="{{ asset('imagenes/formula_Det.png') }}" alt="">

        <br>
        <br>

        <h2>ejercicios</h2>

        <br>
        <br>

        <h2>primer ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio1_Det.png') }}" alt="">
        <br>
        <br>

        <h2>segundo ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio2_Det.png') }}" alt="">
        <br>
        <br>

        <h2>tercer ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio3_Det.png') }}" alt="">
        <br>
        <br>
        
        <h2>cuarto ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio4_Det.png') }}" alt="">
        <br>
        <br>
        
        <h2>quinto ejercicio</h2>
        <img src="{{ asset('imagenes/ejercicio5_Det.png') }}" alt="">
        <br>
        <br>
        
 
        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('Det')}}">determinantes</a></li>
            <li><a href="{{route("REDet")}}">Respuestas ejercicios Determinantes</a></li>
                
            </ul>
        </nav>
</header>

@endsection

    