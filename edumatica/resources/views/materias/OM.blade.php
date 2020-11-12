@extends('layouts.plantilla_materia')

@section('title', 'Operaciones con matrices')

@section('content')
<header>
        <h1>aca puedes ver Operaciones con matrices</h1>

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('EOM')}}">Ejercicios Operaciones con matrices</a></li>
                
            </ul>
        </nav>
</header>
@endsection
