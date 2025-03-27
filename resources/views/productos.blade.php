@extends('layouts.app')

@section('content')
<h1 class="text-center text-gray-800 text-2xl font-medium">Productos</h1>

<div class="flex flex-wrap justify-evenly mt-4 gap-4">
    @foreach($productos as $producto)
    <a href="{{ route('detalleProducto', $producto->id_producto) }}"> <!-- Agregar enlace -->
        <div class="bg-gray-200 hover:bg-gray-300 w-[300px] h-[250px] p-4 rounded cursor-pointer">
            @php
                $imagen = $producto->imagenes->first(); // Tomar la primera imagen si hay varias
            @endphp
            <img class="h-[150px] w-full object-cover rounded"
                src="{{ $imagen ? $imagen->imagen_url : asset('images/no-image.png') }}"
                alt="Imagen de {{ $producto->nombre }}">

            <p class="text-center mt-2 font-medium text-gray-800">{{ $producto->nombre }}</p>
            <p class="text-center text-blue-600">Código: {{ $producto->codigo_externo }}</p>
            <p class="text-center text-blue-600">Unidades: {{ $producto->stock }}</p>
            <p class="text-center text-green-600 font-bold">S/ {{ number_format($producto->precio, 2) }}</p>
        </div>
    </a>
    @endforeach
</div>
@endsection
