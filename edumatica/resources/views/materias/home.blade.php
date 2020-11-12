@extends('layouts.plantilla_home')
@section('title', 'pagina principal')

@section('content')
<h1>esta es la pagina de las materias</h1>

    <br>

    <header>
            <h2>Primer tema</h2>
            <nav>
                <ul>
                    <li><a href="{{route("EV")}}">Espacios vectoriales</a></li>
                    <li><a href="{{route("ejercicios_EV")}}">ejercicios Espacios vectoriales</a></li>
                    <li><a href="{{route("reEV")}}">Respuestas ejercicios Espacios vectoriales</a></li>
                </ul>
            </nav>
    </header>

    <header>
            <h2>segundo tema</h2>
            <nav>
                <ul>
                    <li><a href="{{route("OM")}}">Operaciones con matrices</a></li>
                    <li><a href="{{route("EOM")}}">ejercicios Operaciones con matrices</a></li>
                    <li><a href="{{route("REOM")}}">Respuestas ejercicios Operaciones con matrices</a></li>
                </ul>
            </nav>
    </header>

    <header>
            <h2>tercer tema</h2>
            <nav>
                <ul>
                    <li><a href="{{route("Det")}}">Determinantes</a></li>
                    <li><a href="{{route("EDet")}}">ejercicios Determinantes</a></li>
                    <li><a href="{{route("REDet")}}">Respuestas ejercicios Determinantes</a></li>
                </ul>
            </nav>
    </header>

    <header>
            <h2>cuarto</h2>
            <nav>
                <ul>
                    <li><a href="{{route("Sel")}}">Sistema de ecuaciones lineales</a></li>
                    <li><a href="{{route("ESel")}}">ejercicios Sistema de ecuaciones lineales</a></li>
                    <li><a href="{{route("RESel")}}">Respuestas ejercicios Sistema de ecuaciones lineales</a></li>
                </ul>
            </nav>
    </header>


@endsection
