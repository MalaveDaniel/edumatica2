@extends('layouts.plantilla_materia')

@section('title', 'Sistema de ecuaciones lineales')

@section('content')
<div class="text-white">

    <h1 class="text-center align-middle object-center">Aca puedes ver Sistema de ecuaciones lineales</h1>

    <br>
<br>

    <p class="text-center align-middle object-center">Un sistema de ecuaciones lineales es un conjunto de dos o más ecuaciones de primer grado, en el cual se relacionan dos o más incógnitas.</p>

    <br>
    <br>

    <h2 class="text-center align-middle object-center">Metodo de resolucion</h2>
    

                <br>
                <br>
                <div class="grid grid-cols-2">

                    <img src="{{ asset('imagenes/formula1_Sel.png') }}" alt="">
                    <img src="{{ asset('imagenes/formula2_Sel.png') }}" alt="">
                </div>

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


