@extends('plantilla')
@section('titulo')
Inicio
@endsection
@section('contenido')


<div class="sec__inicio">
    <h1 class="sec__inicio__h1">Ofertas del día</h1>
    <div class="articulos_todos">


    @foreach ($productos as $producto)
    <div class="container__articulos">
      <div class="articulos">
        <div class="container__img">
          <a href="{{route('productoslink.show',$producto->id)}}"><img
            class="inicio__img"
            src="{{$producto->archivo}}"
            alt=""
          /></a>
        </div>
        <div class="container__texto">
          <h3 class="container__texto__h2">{{$producto->nombre}}</h3>
          <p class="container__texto__p">${{$producto->precio}}</p>
          <div class="container__texto__onainer__boton">
           {{--  {/*  <button class="container__texto__button1">Agregar a lista</button> */} --}}
            <button class="container__texto__button ">
              Agregar a lista
            </button>
          </div>
        </div>
      </div>
    </div>
    @endforeach






    </div>
  </div>
</div>
<a href="/productoslink/create">
<span class="agregar-mas">
    <i class="fas fa-plus"></i>
</span></a>
<script src="js/app.js"></script>
@endsection
