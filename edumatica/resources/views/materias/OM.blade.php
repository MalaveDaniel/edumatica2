@extends('layouts.plantilla_materia')

@section('title', 'Operaciones con matrices')

@section('content')
<div class="text-white">

    <h1 class="text-center align-middle object-center ">aca puedes ver Operaciones con matrices</h1>

    
    <br>
    <br>

    <p class="text-center align-middle object-center ">Las operaciones con matrices son la suma, la resta, la división y la multiplicación.</p>

    <br>
    <br>

    <p class="text-center align-middle object-center ">Una matriz es una forma rectangular donde se ordenan los números reales mediante coordenadas reflejadas en los subíndices.</p>

    <br>
    <br>

    <p class="text-center align-middle object-center ">La dimensión de una matriz se representa como la multiplicación de la dimensión de la fila con la dimensión de la columna. Denominamos (m) para la dimensión de las filas y (n) para la dimensión de las columnas. Entonces, una matriz mantendrá m-filas y n-columnas.</p>

    <br>
    <br>

    <p class="text-center align-middle object-center ">Se puede definir una matriz, como un conjunto de elementos (números) ordenados en filas y columnas. </p>

    <br>
    <br>

    <h3 >formulas</h3>

    <br>
    <br>
<div class="grid grid-cols-4">

    <h2>suma de matrices</h2>
    <img src="{{ asset('imagenes/formula1_OM.png') }}" alt="">
    
    

    <h2>Producto de un número real por una matriz</h2>
    <img src="{{ asset('imagenes/formula2_OM.png') }}" alt="">
    
    

    <h2>producto de matrices</h2>
    <img src="{{ asset('imagenes/formula3_OM.png') }}" alt="">

    
    

    <h2>matriz inversa</h2>
    <img src="{{ asset('imagenes/formula4_OM.png') }}" alt="">
</div>

    <div class="text-center align-middle object-center ">

        <nav>
            <ul>
            <li><a href="{{route("dashboard")}}">home</a></li>
            <li><a href="{{route('EOM')}}">Ejercicios Operaciones con matrices</a></li>
                
            </ul>
        </nav>
    </div>

</div>

@endsection
