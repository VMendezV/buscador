@extends('plantilla')
@section('titulo')
Resultados de búsqueda
@endsection
@section('contenido')
  <div class="sec__inicio">
    <h1 class="sec__inicio__h1">Resultados de búsqueda</h1>
    <div class="container">
      @foreach ($productos as $producto)
        <div class="card border border-dark rounded" style="width: 18rem;">
          <img class="card-img-top" src="{{$producto->archivo}}" style="width:100%" alt="Card image cap">
          <div class="card-body pt-4 pb-4 text-center">
            <p class="card-title text-capitalize"><strong>{{$producto->nombre}}</strong></p>
            <p class="card-text">${{$producto->precio}} en {{$producto->sucursal}}</p>
            <a class="btn btn-success" href="/producto/{{$producto->id}}">Ver producto aquí</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
