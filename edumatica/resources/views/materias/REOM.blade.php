@extends('layouts.plantilla_respuesta')

@section('title', 'Respuestas de los ejercicios de Operaciones con matrices')

@section('content')

<header>
        <h1>aca estan las respuestas de los ejercicios de Operaciones con matrices</h1>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('OM')}}">Operaciones con matrices</a></li>
            <li><a href="{{route('EOM')}}">ejercicios de Operaciones con matrices</a></li>
                
            </ul>
        </nav>
</header>
@endsection
