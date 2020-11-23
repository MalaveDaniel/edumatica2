@extends('layouts.plantilla_materia')

@section('title', 'Determinantes')

@section('content')

<div class="text-white">

    <h1 class="text-center align-middle object-center">aca puedes ver Determinantes</h1>

    <br>
    <br>

    <p class="text-center align-middle object-center">En Matemáticas se define el determinante como una forma multilineal alternada sobre un espacio vectorial. Esta definición indica una serie de propiedades matemáticas y generaliza el concepto de determinante de una matriz haciéndolo aplicable en numerosos campos. El concepto de determinante o volumen orientado fue introducido para estudiar el número de soluciones de los sistemas de ecuaciones lineales.</p>

    <br>
    <br>


    <h2 class="text-center align-middle object-center">metodo de resolucion</h2>

    <p class="text-center align-middle object-center">La regla de Sarrus permite calcular el determinante de una matriz de 3×3, introduciendo un método mucho más sencillo e intuitivo. Para poder comprobar el valor de la regla de Sarrus, tomamos una matriz cualquiera de dimensión 3, El cálculo de su determinante se realizaría mediante el producto de sus diagonales principales, restándole el producto de las diagonales inversas. Para aplicar la regla de Sarrus, y resolverla de un modo más visual, deberíamos incluir la fila 1 y 2, como fila 4 y 5 respectivamente. Es importante mantener la fila 1 en la 4ª posición, y la fila 2 en la 5ª. Ya que si las intercambiamos, la Regla de Sarrus no resultará efectiva.</p>

    <br>
    <br>

    <img  src="{{ asset('imagenes/formula_Det.png') }}" alt="">

    <div class="text-center align-middle object-center">
        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('EDet')}}">Ejercicios de determinantes</a></li>
                
            </ul>
        </nav>
    </div>
</div>
        



@endsection
