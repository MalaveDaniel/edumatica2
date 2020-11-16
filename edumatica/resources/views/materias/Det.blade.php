@extends('layouts.plantilla_materia')

@section('title', 'Determinantes')

@section('content')

<header>
        <h1>aca puedes ver Determinantes</h1>

        <br>
        <br>

        <p>En Matemáticas se define el determinante como una forma multilineal alternada sobre un espacio vectorial. Esta definición indica una serie de propiedades matemáticas y generaliza el concepto de determinante de una matriz haciéndolo aplicable en numerosos campos. El concepto de determinante o volumen orientado fue introducido para estudiar el número de soluciones de los sistemas de ecuaciones lineales.</p>

        <br>
        <br>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('EDet')}}">Ejercicios de determinantes</a></li>
                
            </ul>
        </nav>
</header>


@endsection
