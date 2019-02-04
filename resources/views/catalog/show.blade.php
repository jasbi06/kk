@extends('layouts.master')

@section('content')

    <div class="row">

        <div class="col-sm-4">
            <img src="{{$peliculas->poster}}" style="height:300px"/>

        </div>
        <div class="col-sm-8">
            <h2>{{$peliculas->title}}</h2>
            <h4>Año: {{$peliculas->year}}</h4>
            <h4>Director: {{$peliculas->director}}</h4>
            <p><b>Resumen:</b> {{$peliculas->synopsis}}</p>

            @if($peliculas->rented!=false)
            <p><b>Estado:</b> Película disponible</p>
                <button type="button" class="btn btn-primary">Alquilar película</button>
            @else
                <p><b>Estado:</b> Película actualmente alquilada </p>
                <button type="button" class="btn btn-danger">Devolver película</button>
            @endif

            @if($peliculas->rented)
                <p><b>Estado:</b> Pelicula actualmente alquilada</p>
                @php
                $class = "btn btn-danger";
                $texto ="Devolver";
                @endphp
            @else
                <p><b>Estado:</b> Pelicula en stock</p>
                @php
                    $class = "btn btn-success";
                    $texto ="Alquilar";
                @endphp
            @endif

            <form action="{{ url('catalog/changeRented/' .$peliculas->id) }}" method="POST">
                {{method_field('PUT')}}
                @csrf

                <button type="button" class="{{$clase}}"><i class="fas fa-highlighter"></i>{{$texto}}</button>

            </form>

           <!-- <a href="/catalog/edit/{{$peliculas->id}}"><button type="button" class="btn btn-warning"><i class="fas fa-highlighter"></i> Editar Pelicula</button></a> -->

            <a href="/catalog"><button type="button" class="btn btn-light"><i class="fas fa-arrow-left"></i> Volver al listado</button></a>

        </div>
    </div>

@stop
