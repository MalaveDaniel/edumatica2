@extends('layouts.plantilla_materia')

@section('title', 'Determinantes')

@section('content')

<header>
        <h1>aca puedes ver Determinantes</h1>

        <br>
    <br>

        <p></p>

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
