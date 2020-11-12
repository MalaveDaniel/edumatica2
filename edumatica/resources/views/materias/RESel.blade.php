@extends('layouts.plantilla_respuesta')

@section('title', 'Respuestas de los ejercicios de Sistema de ecuaciones lineales')

@section('content')

<header>
        <h1>aca estan las respuestas de los ejercicios de Sistema de ecuaciones lineales</h1>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('Sel')}}">Sistema de ecuaciones lineales</a></li>
            <li><a href="{{route('ESel')}}">ejercicios de Sistema de ecuaciones lineales</a></li>
                
            </ul>
        </nav>
</header>
@endsection
