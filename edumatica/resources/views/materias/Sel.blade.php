@extends('layouts.plantilla_materia')

@section('title', 'Sistema de ecuaciones lineales')

@section('content')
<header>
        <h1>aca puedes ver Sistema de ecuaciones lineales</h1>

        <br>
    <br>

        <p>Un sistema de ecuaciones lineales es un conjunto de dos o más ecuaciones de primer grado, en el cual se relacionan dos o más incógnitas.</p>

        <br>
        <br>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('ESel')}}">Ejercicios Sistema de ecuaciones lineales</a></li>
            
                
            </ul>
        </nav>
</header>
@endsection


