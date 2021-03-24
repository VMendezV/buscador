@extends('plantilla')
@section('titulo')
Detalle {{$producto->nombre}}
@endsection
@section('contenido')
hola

<h1>{{$producto->nombre}}</h1>
<h1>{{$producto->descripcion}}</h1>
<h1>{{$producto->sucursal}}</h1>
<h1>{{$producto->departamento}}</h1>
<h1>{{$producto->archivo}}</h1>

@endsection
