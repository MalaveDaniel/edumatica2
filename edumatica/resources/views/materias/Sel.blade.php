@extends('layouts.plantilla_materia')

@section('title', 'Sistema de ecuaciones lineales')

@section('content')
<div class="text-white">

    <h1 class="text-center align-middle object-center">aca puedes ver Sistema de ecuaciones lineales</h1>

    <br>
<br>

    <p class="text-center align-middle object-center">Un sistema de ecuaciones lineales es un conjunto de dos o más ecuaciones de primer grado, en el cual se relacionan dos o más incógnitas.</p>

    <br>
    <br>

    <h2 class="text-center align-middle object-center">metodo de resolucion</h2>
    
            <p class="text-center align-middle object-center">La regla de Cramer proporciona la solución de sistemas de ecuaciones lineales compatibles determinados (con una única solución) mediante el cálculo de determinantes. Se trata de un método muy rápido para resolver sistemas, sobre todo, para sistemas de dimensión 2x2 y 3x3.</p>

                <br>
                <br>
            <div class="text-center align-middle object-center">
                <nav>
                    <ul>
                    <li><a href="{{route("dashboard")}}">home</a></li>
                    <li><a href="{{route('ESel')}}">Ejercicios Sistema de ecuaciones lineales</a></li>
                    
                        
                    </ul>
                </nav>
            </div>
</div>
        

@endsection


