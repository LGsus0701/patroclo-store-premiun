@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        @php
            $imagen = $producto->imagenes->first();
        @endphp
        <img class="w-full h-64 object-cover rounded" 
            src="{{ $imagen ? $imagen->imagen_url : asset('images/no-image.png') }}" 
            alt="Imagen de {{ $producto->nombre }}">

        <h2 class="text-2xl font-bold text-gray-800 mt-4">{{ $producto->nombre }}</h2>
        <p class="text-gray-600 text-lg mt-2">{{ $producto->descripcion }}</p>

        <div class="mt-4">
            <p><strong>Modelo:</strong> {{ $producto->modelo }}</p>
            <p><strong>Garantía:</strong> {{ $producto->tiempo_garantia }} meses</p>
            <p><strong>Precio:</strong> S/ {{ number_format($producto->precio, 2) }}</p>
            <p><strong>Marca:</strong> {{ $producto->marca ? $producto->marca->nombre : 'Sin marca' }}</p>
            <p><strong>Proveedor:</strong> {{ $producto->proveedor ? $producto->proveedor->nombre_comercial : 'No disponible' }}</p>
        </div>
    </div>
</div>
@endsection
