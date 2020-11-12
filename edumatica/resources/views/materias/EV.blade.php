@extends('layouts.plantilla_materia')

@section('title', 'Espacios vectoriales')

@section('content')

<header>
        <h1>aca puedes ver Espacios vectoriales</h1>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('ejercicios_EV')}}">Ejercicios Espacios vectoriales</a></li>
                
            </ul>
        </nav>
</header>
@endsection
