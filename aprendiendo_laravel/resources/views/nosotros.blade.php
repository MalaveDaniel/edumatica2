@extends('plantilla')

@section('seccion')

    <h1> este es mi equipo de trabajo </h1>

    @foreach($equipo as $item)
        <a href="{{route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a><br>
    @endforeach

    @if(!empty($nombre))
    
    @switch($nombre)

        @case($nombre=='Ignacio')
            <h2 class="mt-5">el nombre es {{ $nombre }}</h2>
            <p>{{ $nombre }} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet perspiciatis autem vitae? Repellendus perferendis optio sapiente facere eligendi! Labore consequuntur possimus rem praesentium ea, voluptas eaque nulla iusto voluptatum inventore!</p>
        @break

        @case($nombre=='Juanito')
            <h2 class="mt-5">el nombre es {{ $nombre }}</h2>
            <p>{{ $nombre }} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet perspiciatis autem vitae? Repellendus perferendis optio sapiente facere eligendi! Labore consequuntur possimus rem praesentium ea, voluptas eaque nulla iusto voluptatum inventore!</p>
        @break

        @case($nombre=='Pedrito')
            <h2 class="mt-5">el nombre es {{ $nombre }}</h2>
            <p>{{ $nombre }} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet perspiciatis autem vitae? Repellendus perferendis optio sapiente facere eligendi! Labore consequuntur possimus rem praesentium ea, voluptas eaque nulla iusto voluptatum inventore!</p>
        @break

    @endswitch

    @endif

@endsection