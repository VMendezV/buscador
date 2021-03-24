@extends('plantilla2')
@section('titulo')
Inicio
@endsection
@section('contenido')
<h1 class="sec__inicio__h1">Bienvenido {{ Auth::user()->name }}</h1>
<div class=" flex items-center justify-center">

    <form id="form" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST"
    action="{{ route('productoslink.store') }}" enctype="multipart/form-data">
        <div><img src="{{asset('/images/logo3.jpg')}}" width="40%"></div>
        <br>
        <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center">Subir articulo a la aplicacíon de smartshop.</h1>
        <br>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Nombre
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="nombre" type="text" placeholder="Ingresa el nombre"
                value="{{ old('nombre') }}" @error('nombre') is-valid @enderror>
            @error('nombre')
                <h5>{{ $message }}</h5>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Precio
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="precio" type="number" step="any" placeholder="Ingresa el precio"
                        value="{{ old('precio') }}" @error('precio') is-valid @enderror>
                    @error('precio')
                        <h5>{{ $message }}</h5>
                    @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Link de la imagen
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="archivo" type="text" placeholder="Link de la imagen"
                        value="{{ old('archivo') }}" @error('archivo') is-valid @enderror>
                    @error('archivo')
                        <h5>{{ $message }}</h5>
                    @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Date">
           Sucursal
            </label>

                <select type="text" name="departamento"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                name="sucursal" id="sucursal" type="text" placeholder="sucursal"
                value="{{ old('sucursal') }}" @error('sucursal') is-valid @enderror>
                <option value="">Seleccione la sucursal</option>
                <option>Bodega ahorrera</option>
                <option>Sam´s club</option>
                <option>Soriana</option>
                <option>Chedraui</option>
                <option>City club</option>
                <option>Farmacias YZA</option>
                <option>Farmacias similares</option>
                <option>Walmart</option>
            </select>
            @error('sucursal')
            <h5>{{ $message }}</h5>
        @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="Date">
                Departamento
            </label>

                <select type="text" name="departamento"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                value="{{ old('departamento') }}" @error('departamento') is-valid @enderror>
                <option value="">Seleccione el departamento</option>
                <option>Alimentos y bebidas</option>
                <option>Mascotas</option>
                <option>Electronica</option>
                <option>Deportes</option>
                <option>Farmacia</option>
                <option>Hogar</option>
            </select>
            @error('departamento')
                <h5>{{ $message }}</h5>
            @enderror
        </div>

        <div class="mb-4">

            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Descripción
            </label>

            <textarea class="bshadow appearance-none border rounded w-full py-5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="descripcion" type="text" placeholder="Agrega la descripción del producto" value="{{ old('descripcion') }}" @error('descripcion')
            is-valid @enderror></textarea>@error('descripcion')
            <h5>{{ $message }}</h5>
        @enderror
        </div>


        <div class="flex items-center justify-between">
            <button id="submit"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">
                <i class="fas fa-upload"></i> Publicar articulo
            </button>
        </div>

        <div class="mb-4">


    </form>

</div>



<script src="js/app.js"></script>
@endsection
